<?php

namespace ContainerWz7cxoq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DFqgQb4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dFqgQb4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dFqgQb4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AdminController::addCategory' => ['privates', '.service_locator.0HtAhFc', 'get_ServiceLocator_0HtAhFcService', true],
            'App\\Controller\\AdminController::deleteCategory' => ['privates', '.service_locator.uNFqCBU', 'get_ServiceLocator_UNFqCBUService', true],
            'App\\Controller\\AdminController::getCategories' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\AdminController::updateCategory' => ['privates', '.service_locator.KJmPThy', 'get_ServiceLocator_KJmPThyService', true],
            'App\\Controller\\HomeController::findOne' => ['privates', '.service_locator.lpIR.Nu', 'get_ServiceLocator_LpIR_NuService', true],
            'App\\Controller\\HomeController::login' => ['privates', '.service_locator.Zrf_GqP', 'get_ServiceLocator_ZrfGqPService', true],
            'App\\Controller\\HomeController::products' => ['privates', '.service_locator.lpIR.Nu', 'get_ServiceLocator_LpIR_NuService', true],
            'App\\Controller\\HomeController::register' => ['privates', '.service_locator.rvk3Bah', 'get_ServiceLocator_Rvk3BahService', true],
            'App\\Controller\\HomeController::tradeProduct' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\ProfileController::deleteProduct' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\ProfileController::deleteTradeRequest' => ['privates', '.service_locator.vx7uC0d', 'get_ServiceLocator_Vx7uC0dService', true],
            'App\\Controller\\ProfileController::getProducts' => ['privates', '.service_locator.k7igvSs', 'get_ServiceLocator_K7igvSsService', true],
            'App\\Controller\\ProfileController::getTrades' => ['privates', '.service_locator.uIepQ5Z', 'get_ServiceLocator_UIepQ5ZService', true],
            'App\\Controller\\ProfileController::updateProfile' => ['privates', '.service_locator.rvk3Bah', 'get_ServiceLocator_Rvk3BahService', true],
            'App\\Controller\\ProfileController::validateTradeRequest' => ['privates', '.service_locator.vx7uC0d', 'get_ServiceLocator_Vx7uC0dService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AdminController:addCategory' => ['privates', '.service_locator.0HtAhFc', 'get_ServiceLocator_0HtAhFcService', true],
            'App\\Controller\\AdminController:deleteCategory' => ['privates', '.service_locator.uNFqCBU', 'get_ServiceLocator_UNFqCBUService', true],
            'App\\Controller\\AdminController:getCategories' => ['privates', '.service_locator.3opkxl5', 'get_ServiceLocator_3opkxl5Service', true],
            'App\\Controller\\AdminController:updateCategory' => ['privates', '.service_locator.KJmPThy', 'get_ServiceLocator_KJmPThyService', true],
            'App\\Controller\\HomeController:findOne' => ['privates', '.service_locator.lpIR.Nu', 'get_ServiceLocator_LpIR_NuService', true],
            'App\\Controller\\HomeController:login' => ['privates', '.service_locator.Zrf_GqP', 'get_ServiceLocator_ZrfGqPService', true],
            'App\\Controller\\HomeController:products' => ['privates', '.service_locator.lpIR.Nu', 'get_ServiceLocator_LpIR_NuService', true],
            'App\\Controller\\HomeController:register' => ['privates', '.service_locator.rvk3Bah', 'get_ServiceLocator_Rvk3BahService', true],
            'App\\Controller\\HomeController:tradeProduct' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\ProfileController:deleteProduct' => ['privates', '.service_locator.3MTi94T', 'get_ServiceLocator_3MTi94TService', true],
            'App\\Controller\\ProfileController:deleteTradeRequest' => ['privates', '.service_locator.vx7uC0d', 'get_ServiceLocator_Vx7uC0dService', true],
            'App\\Controller\\ProfileController:getProducts' => ['privates', '.service_locator.k7igvSs', 'get_ServiceLocator_K7igvSsService', true],
            'App\\Controller\\ProfileController:getTrades' => ['privates', '.service_locator.uIepQ5Z', 'get_ServiceLocator_UIepQ5ZService', true],
            'App\\Controller\\ProfileController:updateProfile' => ['privates', '.service_locator.rvk3Bah', 'get_ServiceLocator_Rvk3BahService', true],
            'App\\Controller\\ProfileController:validateTradeRequest' => ['privates', '.service_locator.vx7uC0d', 'get_ServiceLocator_Vx7uC0dService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AdminController::addCategory' => '?',
            'App\\Controller\\AdminController::deleteCategory' => '?',
            'App\\Controller\\AdminController::getCategories' => '?',
            'App\\Controller\\AdminController::updateCategory' => '?',
            'App\\Controller\\HomeController::findOne' => '?',
            'App\\Controller\\HomeController::login' => '?',
            'App\\Controller\\HomeController::products' => '?',
            'App\\Controller\\HomeController::register' => '?',
            'App\\Controller\\HomeController::tradeProduct' => '?',
            'App\\Controller\\ProfileController::deleteProduct' => '?',
            'App\\Controller\\ProfileController::deleteTradeRequest' => '?',
            'App\\Controller\\ProfileController::getProducts' => '?',
            'App\\Controller\\ProfileController::getTrades' => '?',
            'App\\Controller\\ProfileController::updateProfile' => '?',
            'App\\Controller\\ProfileController::validateTradeRequest' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:addCategory' => '?',
            'App\\Controller\\AdminController:deleteCategory' => '?',
            'App\\Controller\\AdminController:getCategories' => '?',
            'App\\Controller\\AdminController:updateCategory' => '?',
            'App\\Controller\\HomeController:findOne' => '?',
            'App\\Controller\\HomeController:login' => '?',
            'App\\Controller\\HomeController:products' => '?',
            'App\\Controller\\HomeController:register' => '?',
            'App\\Controller\\HomeController:tradeProduct' => '?',
            'App\\Controller\\ProfileController:deleteProduct' => '?',
            'App\\Controller\\ProfileController:deleteTradeRequest' => '?',
            'App\\Controller\\ProfileController:getProducts' => '?',
            'App\\Controller\\ProfileController:getTrades' => '?',
            'App\\Controller\\ProfileController:updateProfile' => '?',
            'App\\Controller\\ProfileController:validateTradeRequest' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}