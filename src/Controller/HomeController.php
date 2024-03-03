<?php

namespace App\Controller;

use App\Entity\TradeRequest;
use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home()
    {
        return $this->render('front/home/home.html.twig',[
            'nav_bar_active'=>'home'

        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact()
    {
        return $this->render('front/home/contact.html.twig',[
            'nav_bar_active'=>'contact'

        ]);
    }
    #[Route('/products/{id}', name: 'app_product_single')]
    public function findOne(int $id,ProductRepository $productRepository,CategoryRepository $categoryRepository)
    {
        $result = [
        'product'=>$productRepository->find($id),
        'categories'=>$categoryRepository->findAll(),
        'nav_bar_active'=>'products'
        ];
        $user = $this->getUser();
        if($user){
            $result['my_products'] = $productRepository->getProductsAddedByUser($user->getId());
        }

        return $this->render('front/home/single.html.twig',$result);
    }
    #[Route('/products', name: 'app_products')]
    public function products(ProductRepository $productRepository,CategoryRepository $categoryRepository,Request$request)
    {
        $page = $request->query->get('page',1);
        $category_id = $request->query->get('category');
        $q = $request->query->get('q');
        if($page==0){
            $page=1;
        }
       $result = $productRepository->filterProduct($q,$category_id,$page,5);
        if($request->isXmlHttpRequest()){
                return new JsonResponse([
                   "data"=>$this->renderView('front/home/products/productlist.html.twig',[
                       'products'=>$result['products'],
                       'numberOfPages'=>$result['numberOfPages'],
                       'currentPage'=>$page,
                   ]),
                    'currentCategory'=>$category_id
                ]);
        }
        else{
            return $this->render('front/home/products.html.twig',[
                'nav_bar_active'=>'products',
                'products'=>$result['products'],
                'numberOfPages'=>$result['numberOfPages'],
                'categories'=>$categoryRepository->findAll(),
                'currentPage'=>$page,
                'currentCategory'=>$category_id,
                'currentSearch'=>$q
            ]);
        }

    }
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils,FlasherInterface $flasher)
    {
        $user = $this->getUser();
        $flasher->options([
            'timeout' => 2000,

        ]);
        if($user){
          return   $this->redirectToRoute('app_home');
        }
        $errors = $authenticationUtils->getLastAuthenticationError();
        if($errors!=null){
          $flasher->addError($errors->getMessage());
        }

        return $this->render('front/home/login.html.twig',[
            'nav_bar_active'=>'login'

        ]);

    }
    #[Route('/register', name: 'app_register')]
    public function register(Request $request,ValidatorInterface $validator,FlasherInterface $flasher,EntityManagerInterface $em,UserPasswordHasherInterface $passwordHasher)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class,$user);
        $form->handleRequest($request);
        $flasher->options([
            'timeout' => 2000,
        ]);
        if($form->isSubmitted()){

            $errors = $validator->validate($user);
            if($errors->count()>0 || $user->getPassword()!=$user->confirmPassword){
                foreach ($errors as $violation){
                    $flasher->addError($violation->getMessage());
                }
                if($user->getPassword()!=$user->confirmPassword){
                    $flasher->addError('passwords does not match');
                }


                return $this->render('front/home/register.html.twig',[
                    'form'=>$form,
                    'nav_bar_active'=>'register'

                ]);
            }
            else{
                $user->setIsAdmin(false);
                $user->setPassword($passwordHasher->hashPassword($user,$user->getPassword()));
                $em->persist($user);
                $em->flush();
                $flasher->addSuccess('registred successfully');

                return $this->redirectToRoute('app_login');

            }

        }
        else{
            return $this->render('front/home/register.html.twig',[
                'form'=>$form,

            ]);
        }




    }




}
