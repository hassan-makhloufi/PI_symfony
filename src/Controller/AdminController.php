<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AdminController extends AbstractController
{
    #[Route('/admin/categories/list', name: 'app_admin_categories_list')]
    public function getCategories(CategoryRepository $categoryRepository): Response
    {
        return $this->render('back/categories/list.html.twig', [
            'controller_name' => 'AdminController',
            'categories'=>$categoryRepository->findAll()
        ]);
    }
    #[Route('/admin/categories/add', name: 'app_admin_categories_add')]
    public function addCategory(Request $request,ValidatorInterface $validator,FlasherInterface $flasher,EntityManagerInterface $em): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class,$category);
        $form->handleRequest($request);
        if($form->isSubmitted()){
                $errors = $validator->validate($category);
                if($errors->count()>0){
                    foreach ($errors as $violation){
                        $flasher->addError($violation->getMessage());
                    }
                    return $this->render('back/categories/add.html.twig', [
                        'controller_name' => 'AdminController',
                        'form'=>$form,
                        'action'=>'add'
                    ]);

                }
                else{
                    if($category->getParent() && $category->getParent()->getParent()){
                        $flasher->addError('this category has aleardy a parent');
                    }
                    else {
                        $flasher->addSuccess('category added Successfully');

                        $em->persist($category);
                        $em->flush();
                    }
                    return $this->redirectToRoute('app_admin_categories_list');
                }
        }
        else{
            return $this->render('back/categories/add.html.twig', [
                'controller_name' => 'AdminController',
                'form'=>$form,
                'action'=>'add'
            ]);
        }

    }
    #[Route('/admin/categories/update/{id}', name: 'app_admin_categories_update')]
    public function updateCategory(int  $id,Request $request,ValidatorInterface $validator,FlasherInterface $flasher,EntityManagerInterface $em,CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->find($id);
        $form = $this->createForm(CategoryType::class,$category);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $errors = $validator->validate($category);
            if($errors->count()>0){
                foreach ($errors as $violation){
                    $flasher->addError($violation->getMessage());
                }
                return $this->render('back/categories/add.html.twig', [
                    'controller_name' => 'AdminController',
                    'form'=>$form,
                    'action'=>'update'
                ]);

            }
            else{
                $flasher->addSuccess('category updated Successfully');
                $em->flush();
                return $this->redirectToRoute('app_admin_categories_list');
            }
        }
        else{
            return $this->render('back/categories/add.html.twig', [
                'controller_name' => 'AdminController',
                'form'=>$form,
                'action'=>'update'
            ]);
        }

    }

    #[Route('/admin/categories/delete/{id}', name: 'app_admin_categories_delete')]
    public function deleteCategory(int  $id,FlasherInterface $flasher,EntityManagerInterface $em,CategoryRepository $categoryRepository): Response
    {
        $category = $categoryRepository->find($id);
        $em->remove($category);
        $em->flush();
        $flasher->addSuccess('category deleted successfully');
        return $this->redirectToRoute('app_admin_categories_list');
    }


}
