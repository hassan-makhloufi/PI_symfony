<?php

namespace ContainerLYuOxCw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RS8GV3UService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rS8GV3U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rS8GV3U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdminController::addCategory' => ['privates', '.service_locator.0HtAhFc', 'get_ServiceLocator_0HtAhFcService', true],
            'App\\Controller\\AdminController::createResponse' => ['privates', '.service_locator.4PR2CdU', 'get_ServiceLocator_4PR2CdUService', true],
            'App\\Controller\\AdminController::delete' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\AdminController::deleteCategory' => ['privates', '.service_locator.uNFqCBU', 'get_ServiceLocator_UNFqCBUService', true],
            'App\\Controller\\AdminController::deleteForum' => ['privates', '.service_locator.hHzEFj5', 'get_ServiceLocator_HHzEFj5Service', true],
            'App\\Controller\\AdminController::findAllForums' => ['privates', '.service_locator.QGP4FZ_', 'get_ServiceLocator_QGP4FZService', true],
            'App\\Controller\\AdminController::findAllProducts' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\AdminController::findAllReclamations' => ['privates', '.service_locator.PqWloHb', 'get_ServiceLocator_PqWloHbService', true],
            'App\\Controller\\AdminController::findAllShipping' => ['privates', '.service_locator.W.TDhCz', 'get_ServiceLocator_W_TDhCzService', true],
            'App\\Controller\\AdminController::getCategories' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\AdminController::updateCategory' => ['privates', '.service_locator.KJmPThy', 'get_ServiceLocator_KJmPThyService', true],
            'App\\Controller\\AdminController::updateLivraison' => ['privates', '.service_locator.AvYPkJQ', 'get_ServiceLocator_AvYPkJQService', true],
            'App\\Controller\\AdminController::updateProduct' => ['privates', '.service_locator.wJGaeTS', 'get_ServiceLocator_WJGaeTSService', true],
            'App\\Controller\\AdminController::updateResponse' => ['privates', '.service_locator.sfVgTvm', 'get_ServiceLocator_SfVgTvmService', true],
            'App\\Controller\\ForumController::createForum' => ['privates', '.service_locator.yk5X8rZ', 'get_ServiceLocator_Yk5X8rZService', true],
            'App\\Controller\\ForumController::createForumCategory' => ['privates', '.service_locator.EMQ6gak', 'get_ServiceLocator_EMQ6gakService', true],
            'App\\Controller\\ForumController::deleteComment' => ['privates', '.service_locator.UiDxP8v', 'get_ServiceLocator_UiDxP8vService', true],
            'App\\Controller\\ForumController::deleteForum' => ['privates', '.service_locator.hHzEFj5', 'get_ServiceLocator_HHzEFj5Service', true],
            'App\\Controller\\ForumController::deleteForumCategory' => ['privates', '.service_locator.K_v3Rsg', 'get_ServiceLocator_KV3RsgService', true],
            'App\\Controller\\ForumController::findOneForum' => ['privates', '.service_locator.zFvzp61', 'get_ServiceLocator_ZFvzp61Service', true],
            'App\\Controller\\ForumController::getAllForums' => ['privates', '.service_locator.50hkjZW', 'get_ServiceLocator_50hkjZWService', true],
            'App\\Controller\\ForumController::getForumCategories' => ['privates', '.service_locator.EIOKtPI', 'get_ServiceLocator_EIOKtPIService', true],
            'App\\Controller\\ForumController::likeForum' => ['privates', '.service_locator.XDpc4FK', 'get_ServiceLocator_XDpc4FKService', true],
            'App\\Controller\\ForumController::updateComment' => ['privates', '.service_locator.UiDxP8v', 'get_ServiceLocator_UiDxP8vService', true],
            'App\\Controller\\ForumController::updateForum' => ['privates', '.service_locator.zFvzp61', 'get_ServiceLocator_ZFvzp61Service', true],
            'App\\Controller\\ForumController::updateForumCategory' => ['privates', '.service_locator._EWYLJy', 'get_ServiceLocator_EWYLJyService', true],
            'App\\Controller\\HomeController::findOne' => ['privates', '.service_locator.lpIR.Nu', 'get_ServiceLocator_LpIR_NuService', true],
            'App\\Controller\\HomeController::login' => ['privates', '.service_locator.Zrf_GqP', 'get_ServiceLocator_ZrfGqPService', true],
            'App\\Controller\\HomeController::products' => ['privates', '.service_locator.lpIR.Nu', 'get_ServiceLocator_LpIR_NuService', true],
            'App\\Controller\\HomeController::register' => ['privates', '.service_locator.rvk3Bah', 'get_ServiceLocator_Rvk3BahService', true],
            'App\\Controller\\LivraisonController::createLivraison' => ['privates', '.service_locator.xNJJOU0', 'get_ServiceLocator_XNJJOU0Service', true],
            'App\\Controller\\LivraisonController::createLivraisonLine' => ['privates', '.service_locator.owlR9uD', 'get_ServiceLocator_OwlR9uDService', true],
            'App\\Controller\\LivraisonController::deleteShippingLine' => ['privates', '.service_locator.BQu9D9s', 'get_ServiceLocator_BQu9D9sService', true],
            'App\\Controller\\LivraisonController::findAllShippingLines' => ['privates', '.service_locator.3BoQ8.l', 'get_ServiceLocator_3BoQ8_LService', true],
            'App\\Controller\\LivraisonController::findAllShippings' => ['privates', '.service_locator.W.TDhCz', 'get_ServiceLocator_W_TDhCzService', true],
            'App\\Controller\\NotificationController::findAll' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\NotificationController::findOne' => ['privates', '.service_locator.O8yIHNd', 'get_ServiceLocator_O8yIHNdService', true],
            'App\\Controller\\ProfileController::deleteProduct' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\ProfileController::getProducts' => ['privates', '.service_locator.k7igvSs', 'get_ServiceLocator_K7igvSsService', true],
            'App\\Controller\\ProfileController::updateProfile' => ['privates', '.service_locator.rvk3Bah', 'get_ServiceLocator_Rvk3BahService', true],
            'App\\Controller\\ReclamationController::deleteReclamation' => ['privates', '.service_locator.gLJmjS0', 'get_ServiceLocator_GLJmjS0Service', true],
            'App\\Controller\\ReclamationController::findAllReclamations' => ['privates', '.service_locator.PqWloHb', 'get_ServiceLocator_PqWloHbService', true],
            'App\\Controller\\ReclamationController::index' => ['privates', '.service_locator.SqsYF3L', 'get_ServiceLocator_SqsYF3LService', true],
            'App\\Controller\\ReclamationController::updateReclamation' => ['privates', '.service_locator.gLJmjS0', 'get_ServiceLocator_GLJmjS0Service', true],
            'App\\Controller\\TradeController::deleteLineTrade' => ['privates', '.service_locator.0BX4BPs', 'get_ServiceLocator_0BX4BPsService', true],
            'App\\Controller\\TradeController::deleteTradeRequest' => ['privates', '.service_locator.vx7uC0d', 'get_ServiceLocator_Vx7uC0dService', true],
            'App\\Controller\\TradeController::getTradeLines' => ['privates', '.service_locator.JZM80YZ', 'get_ServiceLocator_JZM80YZService', true],
            'App\\Controller\\TradeController::getTrades' => ['privates', '.service_locator.uIepQ5Z', 'get_ServiceLocator_UIepQ5ZService', true],
            'App\\Controller\\TradeController::tradeProduct' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\TradeController::validateLineTrades' => ['privates', '.service_locator.eMQfWlo', 'get_ServiceLocator_EMQfWloService', true],
            'App\\Controller\\TradeController::validateTradeRequest' => ['privates', '.service_locator.vx7uC0d', 'get_ServiceLocator_Vx7uC0dService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:addCategory' => ['privates', '.service_locator.0HtAhFc', 'get_ServiceLocator_0HtAhFcService', true],
            'App\\Controller\\AdminController:createResponse' => ['privates', '.service_locator.4PR2CdU', 'get_ServiceLocator_4PR2CdUService', true],
            'App\\Controller\\AdminController:delete' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\AdminController:deleteCategory' => ['privates', '.service_locator.uNFqCBU', 'get_ServiceLocator_UNFqCBUService', true],
            'App\\Controller\\AdminController:deleteForum' => ['privates', '.service_locator.hHzEFj5', 'get_ServiceLocator_HHzEFj5Service', true],
            'App\\Controller\\AdminController:findAllForums' => ['privates', '.service_locator.QGP4FZ_', 'get_ServiceLocator_QGP4FZService', true],
            'App\\Controller\\AdminController:findAllProducts' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\AdminController:findAllReclamations' => ['privates', '.service_locator.PqWloHb', 'get_ServiceLocator_PqWloHbService', true],
            'App\\Controller\\AdminController:findAllShipping' => ['privates', '.service_locator.W.TDhCz', 'get_ServiceLocator_W_TDhCzService', true],
            'App\\Controller\\AdminController:getCategories' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\AdminController:updateCategory' => ['privates', '.service_locator.KJmPThy', 'get_ServiceLocator_KJmPThyService', true],
            'App\\Controller\\AdminController:updateLivraison' => ['privates', '.service_locator.AvYPkJQ', 'get_ServiceLocator_AvYPkJQService', true],
            'App\\Controller\\AdminController:updateProduct' => ['privates', '.service_locator.wJGaeTS', 'get_ServiceLocator_WJGaeTSService', true],
            'App\\Controller\\AdminController:updateResponse' => ['privates', '.service_locator.sfVgTvm', 'get_ServiceLocator_SfVgTvmService', true],
            'App\\Controller\\ForumController:createForum' => ['privates', '.service_locator.yk5X8rZ', 'get_ServiceLocator_Yk5X8rZService', true],
            'App\\Controller\\ForumController:createForumCategory' => ['privates', '.service_locator.EMQ6gak', 'get_ServiceLocator_EMQ6gakService', true],
            'App\\Controller\\ForumController:deleteComment' => ['privates', '.service_locator.UiDxP8v', 'get_ServiceLocator_UiDxP8vService', true],
            'App\\Controller\\ForumController:deleteForum' => ['privates', '.service_locator.hHzEFj5', 'get_ServiceLocator_HHzEFj5Service', true],
            'App\\Controller\\ForumController:deleteForumCategory' => ['privates', '.service_locator.K_v3Rsg', 'get_ServiceLocator_KV3RsgService', true],
            'App\\Controller\\ForumController:findOneForum' => ['privates', '.service_locator.zFvzp61', 'get_ServiceLocator_ZFvzp61Service', true],
            'App\\Controller\\ForumController:getAllForums' => ['privates', '.service_locator.50hkjZW', 'get_ServiceLocator_50hkjZWService', true],
            'App\\Controller\\ForumController:getForumCategories' => ['privates', '.service_locator.EIOKtPI', 'get_ServiceLocator_EIOKtPIService', true],
            'App\\Controller\\ForumController:likeForum' => ['privates', '.service_locator.XDpc4FK', 'get_ServiceLocator_XDpc4FKService', true],
            'App\\Controller\\ForumController:updateComment' => ['privates', '.service_locator.UiDxP8v', 'get_ServiceLocator_UiDxP8vService', true],
            'App\\Controller\\ForumController:updateForum' => ['privates', '.service_locator.zFvzp61', 'get_ServiceLocator_ZFvzp61Service', true],
            'App\\Controller\\ForumController:updateForumCategory' => ['privates', '.service_locator._EWYLJy', 'get_ServiceLocator_EWYLJyService', true],
            'App\\Controller\\HomeController:findOne' => ['privates', '.service_locator.lpIR.Nu', 'get_ServiceLocator_LpIR_NuService', true],
            'App\\Controller\\HomeController:login' => ['privates', '.service_locator.Zrf_GqP', 'get_ServiceLocator_ZrfGqPService', true],
            'App\\Controller\\HomeController:products' => ['privates', '.service_locator.lpIR.Nu', 'get_ServiceLocator_LpIR_NuService', true],
            'App\\Controller\\HomeController:register' => ['privates', '.service_locator.rvk3Bah', 'get_ServiceLocator_Rvk3BahService', true],
            'App\\Controller\\LivraisonController:createLivraison' => ['privates', '.service_locator.xNJJOU0', 'get_ServiceLocator_XNJJOU0Service', true],
            'App\\Controller\\LivraisonController:createLivraisonLine' => ['privates', '.service_locator.owlR9uD', 'get_ServiceLocator_OwlR9uDService', true],
            'App\\Controller\\LivraisonController:deleteShippingLine' => ['privates', '.service_locator.BQu9D9s', 'get_ServiceLocator_BQu9D9sService', true],
            'App\\Controller\\LivraisonController:findAllShippingLines' => ['privates', '.service_locator.3BoQ8.l', 'get_ServiceLocator_3BoQ8_LService', true],
            'App\\Controller\\LivraisonController:findAllShippings' => ['privates', '.service_locator.W.TDhCz', 'get_ServiceLocator_W_TDhCzService', true],
            'App\\Controller\\NotificationController:findAll' => ['privates', '.service_locator.eD04aH.', 'get_ServiceLocator_ED04aH_Service', true],
            'App\\Controller\\NotificationController:findOne' => ['privates', '.service_locator.O8yIHNd', 'get_ServiceLocator_O8yIHNdService', true],
            'App\\Controller\\ProfileController:deleteProduct' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\ProfileController:getProducts' => ['privates', '.service_locator.k7igvSs', 'get_ServiceLocator_K7igvSsService', true],
            'App\\Controller\\ProfileController:updateProfile' => ['privates', '.service_locator.rvk3Bah', 'get_ServiceLocator_Rvk3BahService', true],
            'App\\Controller\\ReclamationController:deleteReclamation' => ['privates', '.service_locator.gLJmjS0', 'get_ServiceLocator_GLJmjS0Service', true],
            'App\\Controller\\ReclamationController:findAllReclamations' => ['privates', '.service_locator.PqWloHb', 'get_ServiceLocator_PqWloHbService', true],
            'App\\Controller\\ReclamationController:index' => ['privates', '.service_locator.SqsYF3L', 'get_ServiceLocator_SqsYF3LService', true],
            'App\\Controller\\ReclamationController:updateReclamation' => ['privates', '.service_locator.gLJmjS0', 'get_ServiceLocator_GLJmjS0Service', true],
            'App\\Controller\\TradeController:deleteLineTrade' => ['privates', '.service_locator.0BX4BPs', 'get_ServiceLocator_0BX4BPsService', true],
            'App\\Controller\\TradeController:deleteTradeRequest' => ['privates', '.service_locator.vx7uC0d', 'get_ServiceLocator_Vx7uC0dService', true],
            'App\\Controller\\TradeController:getTradeLines' => ['privates', '.service_locator.JZM80YZ', 'get_ServiceLocator_JZM80YZService', true],
            'App\\Controller\\TradeController:getTrades' => ['privates', '.service_locator.uIepQ5Z', 'get_ServiceLocator_UIepQ5ZService', true],
            'App\\Controller\\TradeController:tradeProduct' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\TradeController:validateLineTrades' => ['privates', '.service_locator.eMQfWlo', 'get_ServiceLocator_EMQfWloService', true],
            'App\\Controller\\TradeController:validateTradeRequest' => ['privates', '.service_locator.vx7uC0d', 'get_ServiceLocator_Vx7uC0dService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::addCategory' => '?',
            'App\\Controller\\AdminController::createResponse' => '?',
            'App\\Controller\\AdminController::delete' => '?',
            'App\\Controller\\AdminController::deleteCategory' => '?',
            'App\\Controller\\AdminController::deleteForum' => '?',
            'App\\Controller\\AdminController::findAllForums' => '?',
            'App\\Controller\\AdminController::findAllProducts' => '?',
            'App\\Controller\\AdminController::findAllReclamations' => '?',
            'App\\Controller\\AdminController::findAllShipping' => '?',
            'App\\Controller\\AdminController::getCategories' => '?',
            'App\\Controller\\AdminController::updateCategory' => '?',
            'App\\Controller\\AdminController::updateLivraison' => '?',
            'App\\Controller\\AdminController::updateProduct' => '?',
            'App\\Controller\\AdminController::updateResponse' => '?',
            'App\\Controller\\ForumController::createForum' => '?',
            'App\\Controller\\ForumController::createForumCategory' => '?',
            'App\\Controller\\ForumController::deleteComment' => '?',
            'App\\Controller\\ForumController::deleteForum' => '?',
            'App\\Controller\\ForumController::deleteForumCategory' => '?',
            'App\\Controller\\ForumController::findOneForum' => '?',
            'App\\Controller\\ForumController::getAllForums' => '?',
            'App\\Controller\\ForumController::getForumCategories' => '?',
            'App\\Controller\\ForumController::likeForum' => '?',
            'App\\Controller\\ForumController::updateComment' => '?',
            'App\\Controller\\ForumController::updateForum' => '?',
            'App\\Controller\\ForumController::updateForumCategory' => '?',
            'App\\Controller\\HomeController::findOne' => '?',
            'App\\Controller\\HomeController::login' => '?',
            'App\\Controller\\HomeController::products' => '?',
            'App\\Controller\\HomeController::register' => '?',
            'App\\Controller\\LivraisonController::createLivraison' => '?',
            'App\\Controller\\LivraisonController::createLivraisonLine' => '?',
            'App\\Controller\\LivraisonController::deleteShippingLine' => '?',
            'App\\Controller\\LivraisonController::findAllShippingLines' => '?',
            'App\\Controller\\LivraisonController::findAllShippings' => '?',
            'App\\Controller\\NotificationController::findAll' => '?',
            'App\\Controller\\NotificationController::findOne' => '?',
            'App\\Controller\\ProfileController::deleteProduct' => '?',
            'App\\Controller\\ProfileController::getProducts' => '?',
            'App\\Controller\\ProfileController::updateProfile' => '?',
            'App\\Controller\\ReclamationController::deleteReclamation' => '?',
            'App\\Controller\\ReclamationController::findAllReclamations' => '?',
            'App\\Controller\\ReclamationController::index' => '?',
            'App\\Controller\\ReclamationController::updateReclamation' => '?',
            'App\\Controller\\TradeController::deleteLineTrade' => '?',
            'App\\Controller\\TradeController::deleteTradeRequest' => '?',
            'App\\Controller\\TradeController::getTradeLines' => '?',
            'App\\Controller\\TradeController::getTrades' => '?',
            'App\\Controller\\TradeController::tradeProduct' => '?',
            'App\\Controller\\TradeController::validateLineTrades' => '?',
            'App\\Controller\\TradeController::validateTradeRequest' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:addCategory' => '?',
            'App\\Controller\\AdminController:createResponse' => '?',
            'App\\Controller\\AdminController:delete' => '?',
            'App\\Controller\\AdminController:deleteCategory' => '?',
            'App\\Controller\\AdminController:deleteForum' => '?',
            'App\\Controller\\AdminController:findAllForums' => '?',
            'App\\Controller\\AdminController:findAllProducts' => '?',
            'App\\Controller\\AdminController:findAllReclamations' => '?',
            'App\\Controller\\AdminController:findAllShipping' => '?',
            'App\\Controller\\AdminController:getCategories' => '?',
            'App\\Controller\\AdminController:updateCategory' => '?',
            'App\\Controller\\AdminController:updateLivraison' => '?',
            'App\\Controller\\AdminController:updateProduct' => '?',
            'App\\Controller\\AdminController:updateResponse' => '?',
            'App\\Controller\\ForumController:createForum' => '?',
            'App\\Controller\\ForumController:createForumCategory' => '?',
            'App\\Controller\\ForumController:deleteComment' => '?',
            'App\\Controller\\ForumController:deleteForum' => '?',
            'App\\Controller\\ForumController:deleteForumCategory' => '?',
            'App\\Controller\\ForumController:findOneForum' => '?',
            'App\\Controller\\ForumController:getAllForums' => '?',
            'App\\Controller\\ForumController:getForumCategories' => '?',
            'App\\Controller\\ForumController:likeForum' => '?',
            'App\\Controller\\ForumController:updateComment' => '?',
            'App\\Controller\\ForumController:updateForum' => '?',
            'App\\Controller\\ForumController:updateForumCategory' => '?',
            'App\\Controller\\HomeController:findOne' => '?',
            'App\\Controller\\HomeController:login' => '?',
            'App\\Controller\\HomeController:products' => '?',
            'App\\Controller\\HomeController:register' => '?',
            'App\\Controller\\LivraisonController:createLivraison' => '?',
            'App\\Controller\\LivraisonController:createLivraisonLine' => '?',
            'App\\Controller\\LivraisonController:deleteShippingLine' => '?',
            'App\\Controller\\LivraisonController:findAllShippingLines' => '?',
            'App\\Controller\\LivraisonController:findAllShippings' => '?',
            'App\\Controller\\NotificationController:findAll' => '?',
            'App\\Controller\\NotificationController:findOne' => '?',
            'App\\Controller\\ProfileController:deleteProduct' => '?',
            'App\\Controller\\ProfileController:getProducts' => '?',
            'App\\Controller\\ProfileController:updateProfile' => '?',
            'App\\Controller\\ReclamationController:deleteReclamation' => '?',
            'App\\Controller\\ReclamationController:findAllReclamations' => '?',
            'App\\Controller\\ReclamationController:index' => '?',
            'App\\Controller\\ReclamationController:updateReclamation' => '?',
            'App\\Controller\\TradeController:deleteLineTrade' => '?',
            'App\\Controller\\TradeController:deleteTradeRequest' => '?',
            'App\\Controller\\TradeController:getTradeLines' => '?',
            'App\\Controller\\TradeController:getTrades' => '?',
            'App\\Controller\\TradeController:tradeProduct' => '?',
            'App\\Controller\\TradeController:validateLineTrades' => '?',
            'App\\Controller\\TradeController:validateTradeRequest' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
