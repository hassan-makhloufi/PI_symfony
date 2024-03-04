<?php

namespace App\Controller;

use App\Entity\LineLivraison;
use App\Entity\Livraison;
use App\Repository\LineLivraisonRepository;
use App\Repository\LivraisonRepository;
use App\Repository\TradeRequestRepository;
use ContainerFsRz3IF\getConsole_Command_SecretsEncryptFromLocalService;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints\Json;

class LivraisonController extends AbstractController
{

    #[Route('/profile/liv-lines/create/{id}', name: 'app_livraison_lines_create')]
    public function createLivraisonLine(int $id,TradeRequestRepository $tradeRequestRepository,FlasherInterface $flasher,EntityManagerInterface $entityManager,LineLivraisonRepository $lineLivraisonRepository): Response
    {
        $user = $this->getUser();
        if($user){
            $tradeRequest = $tradeRequestRepository->find($id);
               if($tradeRequest){
                   $livraisonLine = new LineLivraison();
                   if($tradeRequest->getToUser()->getId()==$user->getId() || $tradeRequest->getFromUser()->getId()==$user->getId()) {
                       $livraisonLine->setAddedBy($user);
                       $livraisonLine->setTradeRequest($tradeRequest);
                       $sameLineLivraison = $lineLivraisonRepository->findOneBy([
                           'addedBy'=>$user->getId(),
                           'tradeRequest'=>$tradeRequest->getId()
                       ]);
                       if(!$sameLineLivraison){

                           $entityManager->persist($livraisonLine);
                           $entityManager->flush();
                           $flasher->addSuccess('shipping line  added successfully');
                       }
                       else{
                           $flasher->addError('shipping line  does  exist');

                       }
                   }
                   else{
                       $flasher->addError('this trade does not belong to any user');
                   }
               }
               else{
                   $flasher->addError('trade request not found');
               }
               return $this->redirectToRoute('app_livraison_lines');
        }
        else{
            return $this->redirectToRoute('app_login');

        }


    }
    #[Route('/profile/liv-lines', name: 'app_livraison_lines')]
    public function findAllShippingLines(LineLivraisonRepository $lineLivraisonRepository)
    {
        $user = $this->getUser();
        if($user){
             return $this->render('front/profile/livraison/livraison-lines.html.twig',[
                 'livraison_lines'=>$lineLivraisonRepository->findBy([
                     'livraison'=>null,
                     'addedBy'=>$user->getId()
                 ]),
                 'active'=>'livraison-lines'

             ]);
        }
        else{
            return $this->redirectToRoute('app_login');
        }
    }
    #[Route('/profile/liv-lines/delete/{id}', name: 'app_livraison_lines_delete')]
    public function deleteShippingLine(int $id,LineLivraisonRepository $lineLivraisonRepository,EntityManagerInterface $entityManager,FlasherInterface $flasher){
        $user = $this->getUser();
        $lineLivraison = $lineLivraisonRepository->findOneBy([
            'id'=>$id,
            'addedBy'=>$user->getId()
        ]);
        if($lineLivraison){
         $entityManager->remove($lineLivraison);
         $entityManager->flush();
         $flasher->addSuccess('livrasion line deleted successfully');
        }
        else{
            $flasher->addError('livraison line does not exist');
        }
        return $this->redirectToRoute('app_livraison_lines');


    }
    #[Route('/profile/livraison/create', name: 'app_livraison_create')]
    public  function createLivraison(Request $request,LineLivraisonRepository $lineLivraisonRepository,EntityManagerInterface $entityManager){

        $user = $this->getUser();
        if($user){
            $shippingLines = $lineLivraisonRepository->findBy([
                'addedBy'=>$user->getId()
            ]);
            $country = $request->request->get('country');
            $state = $request->request->get('state');
            $adress = $request->request->get('adress');
            $livraison = new Livraison();
            $livraison->setState($state);
            $livraison->setCountry($country);
            $livraison->setAdress($adress);
            $livraison->setAdder($user);
            $livraison->setEtat('en attente');
            $entityManager->persist($livraison);
            foreach ($shippingLines as $s){
                $s->setLivraison($livraison);
            }
            $entityManager->flush();
            return new JsonResponse(['status'=>200]);
        }
        else{
            return new JsonResponse(['status'=>403]);
        }

    }
    #[Route('/profile/livraison', name: 'app_livraison')]
    public function findAllShippings(LivraisonRepository $livraisonRepository){
        $user = $this->getUser();
        if($user){
            return $this->render('front/profile/livraison/livraisons.html.twig',[
                'livraisons'=>$livraisonRepository->findBy([
                    'adder'=>$user->getId()
                ]),
                'active'=>'livraisons'
            ]);
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }



}
