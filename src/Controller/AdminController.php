<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Notification;
use App\Entity\ReclamationResponse;
use App\Form\CategoryType;
use App\Form\ResponseType;
use App\Form\UpdateProductType;
use App\Repository\CategoryRepository;
use App\Repository\ForumRepository;
use App\Repository\LivraisonRepository;
use App\Repository\ProductRepository;
use App\Repository\ReclamationRepository;
use App\Repository\ReclamationResponseRepository;
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
    #[Route('/admin/forums', name: 'app_admin_forums')]
    public function findAllForums(ForumRepository $forumRepository){
      return $this->render('back/forum/list.html.twig',[
          'forums'=>$forumRepository->findAll()
      ]);

    }
    #[Route('/admin/forums/delete/{id}', name: 'app_admin_forums_delete')]
    public function deleteForum(int $id,ForumRepository $forumRepository,EntityManagerInterface $entityManager,FlasherInterface $flasher){
        $forum = $forumRepository->find($id);
        if($forum){
            $entityManager->remove($forum);
            $entityManager->flush();
            $flasher->addSuccess('forum deleted successfully');
        }
        else{
            $flasher->addError('forum not found');
        }
        return $this->redirectToRoute('app_admin_forums');


    }
    #[Route('/admin/products', name: 'app_admin_products')]
    public function findAllProducts(ProductRepository $productRepository){
            return $this->render('back/products/list.html.twig',[
                'products'=>$productRepository->findAll()
            ]);
    }
    #[Route('/admin/products/delete/{id}', name: 'app_admin_products_delete')]
    public function delete(int $id, ProductRepository $productRepository,EntityManagerInterface $entityManager,FlasherInterface $flasher){
        $product = $productRepository->find($id);
        if($product && $product->isDeletable()){
            $entityManager->remove($product);
            $entityManager->flush();
            $flasher->addSuccess('product deleted successfully');
        }
        else{
            $flasher->addError('this product can not be deleted');
        }
        return $this->redirectToRoute('app_admin_products');
    }
    #[Route('/admin/products/update/{id}',name:'app_admin_product_update')]
    public function updateProduct(Request $request,int $id,ProductRepository $productRepository,ValidatorInterface $validator,FlasherInterface $flasher,EntityManagerInterface $entityManager){
        $product = $productRepository->find($id);
        $form = $this->createForm(UpdateProductType::class,$product);
        $form->handleRequest($request);
        if($form->isSubmitted()){
               $errors =  $validator->validate($product);
               if(count($errors)>0){
                   foreach ($errors as $e){
                       $flasher->addError($e->getMessage());
                   }
               }
               else{
                   $entityManager->flush();
                   $flasher->addSuccess('product updated successfully');
               }
               return $this->redirectToRoute('app_admin_products');

        }
        else{
            return $this->render('back/products/add.html.twig',[
                'form'=>$form
            ]);
        }
    }
    #[Route('/admin/reclamations', name: 'app_admin_reclamation')]
    public function findAllReclamations(ReclamationRepository $reclamationRepository){
        return $this->render('back/reclamations/list.html.twig',[
            'reclamations'=>$reclamationRepository->findAll()
        ]);
    }
    #[Route('/admin/response/{reclamation_id}', name: 'app_admin_response_create')]
    public function createResponse(int $reclamation_id,ReclamationRepository $reclamationRepository,Request $request,ValidatorInterface $validator,FlasherInterface $flasher,EntityManagerInterface $entityManager){
        $reclamation = $reclamationRepository->find($reclamation_id);
        if($reclamation){
            $response = new ReclamationResponse();
            $form = $this->createForm(ResponseType::class,$response);
            $form->handleRequest($request);
            if($form->isSubmitted()){
                $errors = $validator->validate($response);
                if(count($errors)>0){
                        foreach ($errors as $e){
                            $flasher->addError($e->getMessage());
                        }
                }
                else{
                    $response->setReclamation($reclamation);
                    $entityManager->persist($response);
                    $notification = new Notification();
                    $notification->setMessage('admin has responded to your reclamation ');
                    $notification->setSentTo($reclamation->getAuthor());
                    $notification->setLink('app_reclamation');
                    $notification->setSeen(false);
                    $entityManager->persist($notification);
                    $entityManager->flush();
                }

            }
            else{
                return $this->render('back/reclamations/add.html.twig',[
                    'form'=>$form,
                    'action'=>'add'
                ]);
            }

        }
        else{
           $flasher->addError('reclamation not found');
        }
        return $this->redirectToRoute('app_admin_reclamation');
    }
    #[Route('/admin/response/update/{id}', name: 'app_admin_response_update')]
    public function updateResponse(int $id,ReclamationResponseRepository $reclamationResponseRepository,Request $request,ValidatorInterface $validator,FlasherInterface $flasher,EntityManagerInterface $entityManager){
        $response = $reclamationResponseRepository->find($id);
        if($response){

            $form = $this->createForm(ResponseType::class,$response);
            $form->handleRequest($request);
            if($form->isSubmitted()){
                $errors = $validator->validate($response);
                if(count($errors)>0){
                    foreach ($errors as $e){
                        $flasher->addError($e->getMessage());
                    }
                }
                else{

                    $entityManager->flush();
                }

            }
            else{
                return $this->render('back/reclamations/add.html.twig',[
                    'form'=>$form,
                    'action'=>'update'
                ]);
            }

        }
        else{
            $flasher->addError('response not found');
        }
        return $this->redirectToRoute('app_admin_reclamation');
    }
    #[Route('/admin/livraison', name: 'app_admin_livraison')]
    public function findAllShipping(LivraisonRepository $livraisonRepository){
            return $this->render('back/livraison/list.html.twig',[
                'livraisons'=>$livraisonRepository->findAll()
            ]);
    }
    #[Route('/admin/livraison/{state}/{id}', name: 'app_admin_livraison_update')]
    public function updateLivraison(string $state,int $id,LivraisonRepository $livraisonRepository,EntityManagerInterface $entityManager,FlasherInterface $flasher){
        $livraison = $livraisonRepository->find($id);
        if($livraison){
            $livraison->setEtat($state);
            $entityManager->flush();
            $flasher->addSuccess('livraison updated successfully');
        }
        else{
            $flasher->addError('livraison not found');
        }
        return $this->redirectToRoute('app_admin_livraison');
    }






}
