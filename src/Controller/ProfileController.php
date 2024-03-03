<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\TradeRequest;
use App\Form\ProductType;
use App\Form\RegistrationType;

use App\Repository\ProductRepository;
use App\Repository\TradeRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile/products', name: 'app_profile_products')]
    public function getProducts(Request $request,SluggerInterface $slugger,FlasherInterface $flasher,EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        $user = $this->getUser();
        if($user){
            $product = new Product();
            $form = $this->createForm(ProductType::class,$product);
            $form->handleRequest($request);
            if($form->isSubmitted()){
                $errorMessages = array();
                $imageFile = $form->get('image')->getData();
                if($imageFile){
                    $originalFileName = pathinfo($imageFile->getClientOriginalName(),PATHINFO_FILENAME);

                    $filename = $slugger->slug($originalFileName)."-".uniqid().".".$imageFile->guessExtension();

                    try{
                        $imageFile->move(
                            $this->getParameter('uploads_directory'),
                            $filename
                        );
                        $uploadPath = $this->getParameter('uploads_path');
                        $product->setImage( $uploadPath."/".$filename);
                        $product->setAdder($user);
                        $entityManager->persist($product);
                        $entityManager->flush();
                        $flasher->addSuccess('product added successfully');
                    }catch(FileException $e){
                        array_push($errorMessages,$e->getMessage())   ;

                    }
                }
                else{
                    array_push($errorMessages,'image is missing');
                }
                foreach ($errorMessages as $m){
                    $flasher->addError($m);
                }

                return $this->render('front/profile/my_products/my_products.html.twig', [
                    'active' => 'my_products',
                    'nav_bar_active'=>'profile',
                    'form'=>$form,
                    'products'=>$productRepository->getProductsAddedByUser($user->getId())
                ]);
            }
            else{

                return $this->render('front/profile/my_products/my_products.html.twig', [
                    'active' => 'my_products',
                    'nav_bar_active'=>'profile',
                    'form'=>$form,
                    'products'=>$productRepository->getProductsAddedByUser($user->getId())
                ]);
            }
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }

    #[Route('/profile/update', name: 'app_profile_update')]
    public function updateProfile(ValidatorInterface $validator, Request  $request,FlasherInterface  $flasher,EntityManagerInterface $em,UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $this->getUser();
        if($user){
            $form = $this->createFormBuilder($user)->add('firstname')->add('lastname')->add('email')->getForm();
            $form->handleRequest($request);
            $flasher->options([
                'timeout' => 2000,
            ]);
            if($form->isSubmitted()){
                $errors = $validator->validate($user);
                if($errors->count()>0){
                    foreach ($errors as $violation){
                        $flasher->addError($violation->getMessage());
                    }
                    return $this->render('front/profile/update_profile.html.twig',[
                        'form'=>$form,
                        'active'=>'update_profile',
                        'nav_bar_active'=>'profile'

                    ]);
                }
                else{
                   $em->flush();
                    $flasher->addSuccess('profile updated Successfully successfully');

                    return $this->render('front/profile/update_profile.html.twig',[
                        'form'=>$form,
                        'active'=>'update_profile',
                        'nav_bar_active'=>'profile'


                    ]);

                }

            }
            else{
                return $this->render('front/profile/update_profile.html.twig',[
                    'form'=>$form,
                    'active'=>'update_profile',
                    'nav_bar_active'=>'profile'


                ]);
            }
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/profile/products/delete/{id}', name: 'app_profile_products_delete')]
    public function deleteProduct(int $id,EntityManagerInterface $entityManager,ProductRepository $productRepository,FlasherInterface $flasher): Response
    {
        $user = $this->getUser();
        if($user){
           $product = $productRepository->findOneBy([
               'adder'=>$user->getId(),
                'id'=>$id
           ]);
           if($product){
                $entityManager->remove($product);
                $entityManager->flush();
                $flasher->addSuccess('product removed successfully');
           }
           else{
                $flasher->addError('product not found');
           }
           return $this->redirectToRoute('app_profile_products');

        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/profile/appointments', name: 'app_profile_appointments')]
    public function getAppointments(): Response
    {
        $user = $this->getUser();
        if($user){
            return $this->render('front/profile/appointments/appointments.html.twig', [
                'active' => 'appointments',
                'nav_bar_active'=>'profile'


            ]);
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }



}
