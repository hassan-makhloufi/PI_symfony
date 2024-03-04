<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Forum;
use App\Entity\ForumCategory;
use App\Entity\Like;
use App\Form\AddForumType;
use App\Form\CommentType;
use App\Form\ForumCategoryType;
use App\Form\ForumType;
use App\Repository\CommentRepository;
use App\Repository\ForumCategoryRepository;
use App\Repository\ForumRepository;
use App\Repository\LikeRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;
use PhpParser\NodeVisitor\CommentAnnotatingVisitor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ForumController extends AbstractController
{
    #[Route('/admin/forum/categories', name: 'app_forum_category')]
    public function getForumCategories(ForumCategoryRepository $forumCategory): Response
    {
        return $this->render('back/forumCategory/list.html.twig', [
            'forumCategories' => $forumCategory->findAll(),
        ]);
    }
    #[Route('/admin/forum/categories/add', name: 'app_forum_category_create')]
    public function createForumCategory(ForumCategoryRepository $forumCategory,FlasherInterface $flasher,Request $request ,ValidatorInterface $validator,EntityManagerInterface $entityManager): Response
    {   $forumCategory = new ForumCategory();
        $form = $this->createForm(ForumCategoryType::class,$forumCategory);
         $form->handleRequest($request);
        if($form->isSubmitted()){
            $error = $validator->validate($forumCategory);
            if(count($error)>0){
                foreach ($error as $e){
                    $flasher->addError($e->getMessage());
                }
            }
            else{
                $entityManager->persist($forumCategory);
                $entityManager->flush();
                $flasher->addSuccess('forum category created successfully');
            }
            return $this->redirectToRoute('app_forum_category');
        }
        return $this->render('back/forumCategory/add.html.twig', [
            'form'=>$form,
            'action'=>'create'
        ]);
    }
    #[Route('/admin/forum/categories/update/{id}', name: 'app_forum_category_update')]
    public function updateForumCategory(int $id,ForumCategoryRepository $forumCategoryRepository,FlasherInterface $flasher,Request $request ,ValidatorInterface $validator,EntityManagerInterface $entityManager): Response
    {
       $forumCategory =  $forumCategoryRepository->find($id);
        $form = $this->createForm(ForumCategoryType::class,$forumCategory);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $error = $validator->validate($forumCategory);
            if(count($error)>0){
                foreach ($error as $e){
                    $flasher->addError($e->getMessage());
                }
            }
            else{
                $entityManager->flush();
            }
            $flasher->addSuccess('form category updated Successfuly');
            return $this->redirectToRoute('app_forum_category');
        }
        return $this->render('back/forumCategory/add.html.twig', [
            'form'=>$form,
            'action'=>'create'
        ]);
    }
    #[Route('/admin/forum/categories/delete/{id}', name: 'app_forum_category_delete')]
    public function deleteForumCategory(int $id,ForumCategoryRepository $forumCategoryRepository,EntityManagerInterface $entityManager,FlasherInterface $flasher){
            $forumCategory = $forumCategoryRepository->find($id);
            $entityManager->remove($forumCategory);
            $entityManager->flush();
            $flasher->addSuccess('form category deleted Successfuly');

        return $this->redirectToRoute('app_forum_category');
    }
    #[Route('/forum/create', name: 'app_forum_create')]
    public function createForum(ValidatorInterface $validator,Request $request,FlasherInterface $flasher,EntityManagerInterface $entityManager,SluggerInterface $slugger){
        $user = $this->getUser();
        if($user){
            $forum = new Forum();
            $form  = $this->createForm(AddForumType::class,$forum);
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
                        $forum->setImage( $uploadPath."/".$filename);
                        $forum->setAuthor($user);
                        $forum->setCreatedAt(new \DateTime());
                        $entityManager->persist($forum);
                        $entityManager->flush();
                        $flasher->addSuccess('product added successfully');
                    }catch(FileException $e){
                        array_push($errorMessages,$e->getMessage())   ;

                    }

                }
                else{
                    $forum->setAuthor($user);
                    $forum->setCreatedAt(new \DateTime());
                    $entityManager->persist($forum);
                    $entityManager->flush();
                }
                if(count($errorMessages)>0){
                    foreach ($errorMessages as $e){
                        $flasher->addError($e->getMessage());
                    }
                }
                else{
                    $flasher->addSuccess('forum created successfully');
                }
               return $this->redirectToRoute('app_forum');


            }
            else{
                return $this->render('front/home/forum/create.html.twig',[
                    'form'=>$form,
                    'nav_bar_active'=>'forum'

                ]);
            }
        }
        else{
            return $this->redirectToRoute('app_login');
        }




    }
    #[Route('/forum/update/{id}', name: 'app_forum_update')]
    public function updateForum(int $id,ForumRepository $forumRepository, ValidatorInterface $validator,Request $request,FlasherInterface $flasher,EntityManagerInterface $entityManager){
        $user = $this->getUser();
        if($user){
            $forum = $forumRepository->findOneBy([
                'author'=>$user->getId(),
                'id'=>$id
            ]);
            $form  = $this->createForm(ForumType::class,$forum);
            $form->handleRequest($request);
            if($form->isSubmitted()){
                $errors = $validator->validate($forum);
                if(count($errors)==0){
                    $entityManager->flush();
                    $flasher->addSuccess('forum updated successfully');
                    return  $this->redirectToRoute('app_forum');
                }
                else{
                    foreach ( $errors as $error){
                        $flasher->addError($error->getMessage());
                    }

                }
            }
            return $this->render('front/home/forum/create.html.twig',[
                'form'=>$form,
                'action'=>'update',
                'nav_bar_active'=>'forum'

            ]);

        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/forum/delete/{id}', name: 'app_forum_delete')]
    public function deleteForum(int $id,EntityManagerInterface $entityManager,ForumRepository $forumRepository,FlasherInterface $flasher){
        $user = $this->getUser();
        if($user){
            $forum = $forumRepository->findOneBy([
                'author'=>$user->getId(),

                'id'=>$id
            ]);
            if($forum){
                $entityManager->remove($forum);
                $entityManager->flush();
                $flasher->addSuccess('forum deleted successfully');
            }
            else{
                $flasher->addError('forum not found');

            }
           return  $this->redirectToRoute('app_forum');
        }
        else{
         return   $this->redirectToRoute('app_login');
        }

    }
    #[Route('/forum', name: 'app_forum')]
    public function getAllForums(Request $request, ForumRepository $forumRepository,ForumCategoryRepository $forumCategoryRepository){
            if($request->isXmlHttpRequest()){
                $sort = $request->query->get('sort');
                if($sort=='1'){
                    return new JsonResponse([
                        'data'=>$this->renderView('front/home/forum/forums.html.twig',[
                            'customForums'=>$forumRepository->sortByNumberOfLikes()
                        ]),
                        'status'=>200
                    ]);
                }
                else if($sort=='0'){
                    return new JsonResponse([
                        'data'=>$this->renderView('front/home/forum/forums.html.twig',[
                            'forums'=>$forumRepository->findAll()
                        ]),
                        'status'=>200
                    ]);
                }
                else{
                    return new JsonResponse(['status'=>400]);
                }


            }
            else{
                return $this->render('front/home/forum/list.html.twig',[
                    'forums'=>$forumRepository->findAll(),
                    'forumCategories'=>$forumCategoryRepository->findAll()
                ]);
            }
    }


    #[Route('/forum/{id}', name: 'app_forum_single')]
    public function findOneForum(int $id, Request $request,ValidatorInterface $validator,FlasherInterface $flasher,EntityManagerInterface $entityManager,ForumRepository $forumRepository){
        $user = $this->getUser();
        $options = [
            'forum'=>$forumRepository->find($id),
            'active'=>'update_comment'
        ];
        if($user){
            $comment = new Comment();
            $form = $this->createForm(CommentType::class,$comment);
            $form->handleRequest($request);
            if($form->isSubmitted()){
                $errors = $validator->validate($comment);
                if(count($errors)>0){
                    foreach ($errors as $e){
                        $flasher->addError($e->getMessage());
                    }
                }
                else{
                    $forum = $forumRepository->find($id);
                    if($forum){
                        $comment->setCreatedAt(new \DateTime());
                        $comment->setAuthor($user);
                        $comment->setForum($forum);
                        $entityManager->persist($comment);
                        $entityManager->flush();
                        $flasher->addSuccess('comment added successfully');
                    }
                    else{
                        $flasher->addError('forum does not exist');
                    }

                }

            }
            $options['form'] = $form;
        }



        return $this->render('front/home/forum/single.html.twig',$options);


    }
    #[Route('/comment/delete/{id}/{postId}', name: 'app_comment_delete')]
    public function deleteComment(int $id,int $postId, EntityManagerInterface $entityManager,FlasherInterface $flasher,CommentRepository $commentRepository){
            $user = $this->getUser();
            if($user){
                $comment = $commentRepository->findOneBy([
                    'author'=>$user->getId(),
                    'id'=>$id
                ]);
                if($comment){
                    $entityManager->remove($comment);
                    $entityManager->flush();
                    $flasher->addSuccess('comment deleted successfully');
                }
                else{
                    $flasher->addError('comment not found');

                }
                return $this->redirectToRoute('app_forum_single',['id'=>$postId]);
            }
            else{
                return $this->redirectToRoute('app_login');
            }

    }
    #[Route('/comment/update/{id}/{postId}', name: 'app_comment_update')]
    public function updateComment(Request $request, int $id,int $postId, CommentRepository $commentRepository,EntityManagerInterface $entityManager,FlasherInterface $flasher){
        $user = $this->getUser();
        if($user){
            $comment = $commentRepository->findOneBy([
                'author'=>$user->getId(),
                'id'=>$id
            ]);
            if($comment){
                $content = $request->get('content');
                $comment->setContent($content);
                $entityManager->flush();
                $flasher->addSuccess('comment updated succesfully');

            }
            else{
                $flasher->addError('comment not found');
            }
            return $this->redirectToRoute('app_forum_single',[
                'id'=>$postId
            ]);
        }
        else{
            return $this->redirectToRoute('app_login');
        }
    }
    #[Route('/forum/like/{id}', name: 'app_forum_like')]
    public function likeForum(int $id,ForumRepository $forumRepository,EntityManagerInterface $entityManager,LikeRepository $likeRepository){
        $user = $this->getUser();
        if($user){
            $forum = $forumRepository->find($id);
            $options = [];
            if($forum){
                    if($forum->isLikedByUser($user)){
                        $forum->dislike($user);
                        $entityManager->flush();
                        $options['action'] = 'dislike';
                    }
                    else{
                        $like = new Like();
                        $like->setForum($forum);
                        $like->setUser($user);
                        $entityManager->persist($like);
                        $entityManager->flush();
                        $options['action'] = 'like';

                    }
                $options['likes'] = $likeRepository->count([
                    'forum'=>$id
                ]);
                $options['status'] = 200;
            }
            else{
                $options['status'] = 400;
            }
            return new JsonResponse($options);
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }







}
