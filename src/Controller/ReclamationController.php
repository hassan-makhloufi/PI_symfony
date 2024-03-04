<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Repository\CommentRepository;
use App\Repository\ForumRepository;
use App\Repository\ProductRepository;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReclamationController extends AbstractController
{
    #[Route('/reclamation/create', name: 'app_reclamation_create')]
    public function index(EntityManagerInterface $entityManager,FlasherInterface $flasher,Request $request,CommentRepository $commentRepository,ForumRepository $forumRepository,ProductRepository $productRepository): Response
    {
        $user = $this->getUser();
        if($user){
            $comment_id = $request->request->get('comment_id');
            $forum_id = $request->request->get('forum_id');
            $product_id = $request->request->get('product_id');
            $message = $request->request->get('message');
            $link="";
            try{
                $reclamation = new Reclamation();
                if($comment_id){
                    $comment = $commentRepository->find($comment_id);
                    if(!$comment){
                        throw new \Exception('comment does not exist');
                    }
                    $reclamation->setComment($comment);
                    $link = '/forum/'.$comment->getForum()->getId();
                }
                if($product_id){
                    $product = $productRepository->find($product_id);
                    if(!$product){
                        throw new \Exception('product does not exist');
                    }
                    $reclamation->setProduct($product);
                    $link = '/products/'.$product->getId();
                }
                if($forum_id){
                    $forum = $forumRepository->find($forum_id);
                    if(!$forum){
                        throw new \Exception('forum does not exist');
                    }
                    $reclamation->setForum($forum);
                    $link = '/forum/'.$forum->getId();
                }
                if($link!=""){
                    $reclamation->setLink($link);
                    $reclamation->setMessage($message);
                    $reclamation->setAuthor($user);
                }
                else{
                    throw new \Exception('this reclamation is not related to anything');
                }
                $entityManager->persist($reclamation);
                $entityManager->flush();
                $flasher->addSuccess('reclamation added successfully');
            }catch(\Exception $e){
                $flasher->addError($e->getMessage());
            }
            return $this->redirectToRoute('app_reclamation');

        }
        else{
            return $this->redirectToRoute('app_login');
        }
    }
    #[Route('/profile/reclamation', name: 'app_reclamation')]
    public function findAllReclamations(ReclamationRepository $reclamationRepository){
        $user = $this->getUser();
        if($user){
            return $this->render('front/profile/reclamations/reclamations.html.twig',[
                'reclamations'=>$reclamationRepository->findBy(['author'=>$user->getId()]),
                'active'=>'reclamations'
            ]);
        }
        else{
                return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/profile/reclamation/delete/{id}', name: 'app_reclamation_delete')]
    public function deleteReclamation(int $id,EntityManagerInterface $entityManager,ReclamationRepository $reclamationRepository,FlasherInterface $flasher){
         $user = $this->getUser();
         if($user){
             $reclamation = $reclamationRepository->findOneBy([
                 'author'=>$user->getId(),
                 'id'=>$id
             ]);
            if($reclamation){
                $entityManager->remove($reclamation);
                $entityManager->flush();
                $flasher->addSuccess('reclamation delete successfully');
            }
            else{
                $flasher->addError('reclamation not found');
            }
            return $this->redirectToRoute('app_reclamation');
         }
         else{
             return $this->redirectToRoute('app_login');
         }

    }
    #[Route('/profile/reclamation/update/{id}', name: 'app_reclamation_update')]
    public function updateReclamation(Request $request, int $id,ReclamationRepository $reclamationRepository,EntityManagerInterface $entityManager,FlasherInterface $flasher){
       $reclamation = $reclamationRepository->find($id);
       if($reclamation){
            $reclamation->setMessage($request->request->get('message'));
            $entityManager->flush();
            $flasher->addSuccess('reclamation updated successfully ');
       }
       else{
           $flasher->addError('reclamation does not exist');
       }
       return $this->redirectToRoute('app_reclamation');
    }


}
