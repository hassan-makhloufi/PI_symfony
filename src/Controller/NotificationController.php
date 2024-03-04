<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NotificationController extends AbstractController
{
    #[Route('/notification/{id}', name: 'app_notification_single')]
    public function findOne(int $id, NotificationRepository $notificationRepository,EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if($user){
                $notification = $notificationRepository->find($id);
                if($notification){
                    $notification->setSeen(true);
                    $entityManager->flush();

                    return $this->redirectToRoute($notification->getLink());
                }
                else{
                    return $this->redirectToRoute('app_home');
                }
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/notification', name: 'app_notification')]
    public function findAll(NotificationRepository $notificationRepository): Response
    {

        $user = $this->getUser();
        $options = ['status'=>400];
        if($user){
            $notifications = $notificationRepository->findBy([
                'sentTo'=>$user->getId(),
                'seen'=>false
            ]);
            $options['data'] = $this->renderView('front/home/notifications/notifications.html.twig',[
               'notifications'=>$notifications,
            ]);
            $options['notification'] = count($notifications);
            $options['status']=200;
        }

        return new JsonResponse($options);

    }

}
