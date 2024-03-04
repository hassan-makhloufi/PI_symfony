<?php

namespace App\Controller;

use App\Entity\LineTrade;
use App\Entity\Notification;
use App\Entity\TradeRequest;
use App\Repository\LineTradeRepository;
use App\Repository\ProductRepository;
use App\Repository\TradeRequestRepository;
use Doctrine\DBAL\Driver\Exception;
use Doctrine\ORM\EntityManagerInterface;
use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TradeController extends AbstractController
{
    #[Route('/trade', name: 'app_trade',methods:['POST'])]
    public function tradeProduct(Request $request,ProductRepository $productRepository,EntityManagerInterface $entityManager,FlasherInterface $flasher){

     $user = $this->getUser();
        if($user){
            $fromProduct = $productRepository->findOneBy([
                'adder'=>$user->getId(),
                'id'=>$request->request->get('from')
            ]);
            $toProduct = $productRepository->find($request->request->get('to'));

            if($fromProduct and $toProduct){
                $fromQuantity = intval($request->request->get('fromQuantity'));
                if(($toProduct->getQuanity() - $fromQuantity)<0 || $fromProduct->getQuanity()<=0){
                    $flasher->addError('products are out of stock');
                }
                else{
                    $tradeRequest = new LineTrade();
                    $tradeRequest->setFromProduct($fromProduct);
                    $tradeRequest->setToProduct($toProduct);
                    $tradeRequest->setFromQuantity(1);
                    $tradeRequest->setFromUser($fromProduct->getAdder());
                    $tradeRequest->setToQuantity($fromQuantity);

                    $entityManager->persist($tradeRequest);
                    $fromProduct->setQuanity($fromProduct->getQuanity()-1);
                    $entityManager->flush();
                    $flasher->addSuccess("a new line trade has been added");
                }


            }
            return $this->redirectToRoute('app_trade_lines');
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/tradelines', name: 'app_trade_lines',methods:['GET'])]
    public function getTradeLines(FlasherInterface $flasher,LineTradeRepository $lineTradeRepository){
        $user = $this->getUser();
        if($user){
            return $this->render('front/home/trade/tradelines.html.twig',[
                'lineTrades'=>$lineTradeRepository->findBy([
                    'fromUser'=>$user->getId()
                ])
            ]);
        }
        else{
            $flasher->addError('you need to login first before trading');
            return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/tradelines/delete/{id}', name: 'app_trade_lines_delete')]
    public function deleteLineTrade(int $id,EntityManagerInterface $entityManager,FlasherInterface $flasher,LineTradeRepository $lineTradeRepository){
        $user = $this->getUser();
        if($user){
            $lineTrade = $lineTradeRepository->findOneBy([
                'fromUser'=>$user->getId(),
                'id'=>$id
            ]);
            if($lineTrade){
                $fromProduct = $lineTrade->getFromProduct();
                $fromProduct->setQuanity($fromProduct->getQuanity()+$lineTrade->getFromQuantity());
                $entityManager->remove($lineTrade);
                $entityManager->flush();
                $flasher->addSuccess('line trade deleted successfully');
            }
            else{
                $flasher->addError('line trade not found');
            }
            return $this->redirectToRoute('app_trade_lines');

        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }
    #[Route('/tradelines/validate', name: 'app_trade_lines_validate')]
    public function validateLineTrades(Request $request,LineTradeRepository $lineTradeRepository,EntityManagerInterface $entityManager){
            $user = $this->getUser();
            $options = [];
            if($user){
                $lineTrades = $lineTradeRepository->findBy(['fromUser'=>$user->getId()]);


                try{
                    foreach ($lineTrades as $l ){
                        $fromProduct = $l->getFromProduct();
                        $fromProduct->setQuanity($fromProduct->getQuanity()-($request->request->get("".$l->getId()."")-1));
                        if($fromProduct->getQuanity()<0){
                            throw new \Exception('not enough quantity of product'.$fromProduct->getName() );
                        }

                    }

                    foreach ($lineTrades as $l){
                        $rt = new TradeRequest();
                        $rt->setFromQuantity($request->request->get("".$l->getId().""));
                        $rt->setFromProduct($l->getFromProduct());
                        $rt->setToQuantity($l->getToQuantity());
                        $rt->setToProduct($l->getToProduct());
                        $rt->setToUser($l->getToProduct()->getAdder());
                        $rt->setFromUser($l->getFromProduct()->getAdder());
                        $rt->setState('en attente');
                        $entityManager->persist($rt);
                        $notification = new Notification();
                        $notification->setMessage('A new Trade request from '.$user->getFirstname());
                        $notification->setSentTo($l->getToProduct()->getAdder());
                        $notification->setLink('app_profile_trades');
                        $notification->setSeen(false);
                        $entityManager->persist($notification);
                        $entityManager->remove($l);
                    }
                    $entityManager->flush();
                    $options['status']=200;


                }catch (Exception $e){
                    $options['status'] = 400;
                    $options['message']=$e->getMessage();
                }

            }
            else{
                $options['status'] = 400;

            }
         return new JsonResponse($options);

    }
    #[Route('/profile/trades/delete/{id}', name: 'app_profile_trades_delete')]
    public function deleteTradeRequest(int $id,TradeRequestRepository $tradeRequestRepository,FlasherInterface $flasher,EntityManagerInterface $entityManager){
        $user = $this->getUser();
        if($user){
            $trade = $tradeRequestRepository->find($id);
            if($trade->getFromUser()->getId() == $user->getId() && $trade->getState()!='complete'){
                $fromProduct = $trade->getFromProduct();
                $fromProduct->setQuanity($trade->getFromQuantity()+$fromProduct->getQuanity());
                $entityManager->remove($trade);
                $entityManager->flush();

                $flasher->addSuccess('trade deleted successfully');
            }
            else{
                $flasher->addError('cannot remove this trade');
            }
            return $this->redirectToRoute('app_profile_trades');

        }
        else{
            return $this->redirectToRoute('app_login');
        }
    }
    #[Route('/profile/trades/validate/{id}/{action}', name: 'app_profile_trades_validate')]
    public function validateTradeRequest(int $id,string $action,TradeRequestRepository $tradeRequestRepository,FlasherInterface $flasher,EntityManagerInterface $entityManager){
        $user = $this->getUser();
        if($user){
            $trade = $tradeRequestRepository->find($id);

            if($trade->getToUser()->getId() == $user->getId()){


                if($action=='decline'){
                    $trade->setState('declined');
                    $notification = new Notification();
                    $notification->setSentTo($trade->getFromUser());
                    $notification->setSeen(false);
                    $notification->setMessage('declined trade request from user '.$user->getFirstname());
                    $notification->setLink('app_profile_trades') ;
                    $entityManager->persist($notification);

                    $entityManager->flush();

                        $flasher->addSuccess('trade declined successfully');

                }
                else{
                    $toProduct = $trade->getToProduct();
                    if($toProduct->getQuanity()-$trade->getToQuantity()<0){
                        $flasher->addError('not enough product '.$toProduct->getName().' quantity');
                    }
                    else{
                        $toProduct->setQuanity($toProduct->getQuanity()-$trade->getToQuantity());
                        $trade->setState('complete');
                        $notification = new Notification();
                        $notification->setSentTo($trade->getFromUser());
                        $notification->setSeen(false);
                        $notification->setMessage('validated trade request from user '.$user->getFirstname());
                        $notification->setLink('app_profile_trades') ;
                        $entityManager->persist($notification);
                        $entityManager->flush();

                        $flasher->addSuccess('trade validated successfully');

                    }

                }

            }
            else{
                $flasher->addError('cannot remove this trade');
            }
            return $this->redirectToRoute('app_profile_trades');

        }
        else{
            return $this->redirectToRoute('app_login');
        }
    }
    #[Route('/profile/trades', name: 'app_profile_trades')]
    public function getTrades(TradeRequestRepository $tradeRequestRepository): Response
    {
        $user = $this->getUser();
        if($user){
            return $this->render('front/profile/my_trades/my_trades.html.twig', [
                'active' => 'my_trades',
                'nav_bar_active'=>'profile',
                'request_trades'=>$tradeRequestRepository->findBy(['fromUser'=>$user->getId()]),
                'sent_request_trades'=>$tradeRequestRepository->findBy(['toUser'=>$user->getId()])
            ]);
        }
        else{
            return $this->redirectToRoute('app_login');
        }

    }







}
