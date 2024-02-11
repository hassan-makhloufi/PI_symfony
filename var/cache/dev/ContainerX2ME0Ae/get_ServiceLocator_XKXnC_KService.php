<?php

namespace ContainerX2ME0Ae;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XKXnC_KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XKXnC.k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XKXnC.k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ProductCategoryController::delete' => ['privates', '.service_locator.7Ar.w9v', 'get_ServiceLocator_7Ar_W9vService', true],
            'App\\Controller\\ProductCategoryController::edit' => ['privates', '.service_locator.7Ar.w9v', 'get_ServiceLocator_7Ar_W9vService', true],
            'App\\Controller\\ProductCategoryController::index' => ['privates', '.service_locator.EKBqB8K', 'get_ServiceLocator_EKBqB8KService', true],
            'App\\Controller\\ProductCategoryController::new' => ['privates', '.service_locator.Hjz3HR0', 'get_ServiceLocator_Hjz3HR0Service', true],
            'App\\Controller\\ProductCategoryController::show' => ['privates', '.service_locator.hsTZOkm', 'get_ServiceLocator_HsTZOkmService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController::new' => ['privates', '.service_locator.Hjz3HR0', 'get_ServiceLocator_Hjz3HR0Service', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.5OibA2.', 'get_ServiceLocator_5OibA2_Service', true],
            'App\\Controller\\ProductSubCategoryController::delete' => ['privates', '.service_locator.dDxCb1f', 'get_ServiceLocator_DDxCb1fService', true],
            'App\\Controller\\ProductSubCategoryController::edit' => ['privates', '.service_locator.dDxCb1f', 'get_ServiceLocator_DDxCb1fService', true],
            'App\\Controller\\ProductSubCategoryController::index' => ['privates', '.service_locator.X8X8vqk', 'get_ServiceLocator_X8X8vqkService', true],
            'App\\Controller\\ProductSubCategoryController::new' => ['privates', '.service_locator.Hjz3HR0', 'get_ServiceLocator_Hjz3HR0Service', true],
            'App\\Controller\\ProductSubCategoryController::show' => ['privates', '.service_locator.81yOsNV', 'get_ServiceLocator_81yOsNVService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ProductCategoryController:delete' => ['privates', '.service_locator.7Ar.w9v', 'get_ServiceLocator_7Ar_W9vService', true],
            'App\\Controller\\ProductCategoryController:edit' => ['privates', '.service_locator.7Ar.w9v', 'get_ServiceLocator_7Ar_W9vService', true],
            'App\\Controller\\ProductCategoryController:index' => ['privates', '.service_locator.EKBqB8K', 'get_ServiceLocator_EKBqB8KService', true],
            'App\\Controller\\ProductCategoryController:new' => ['privates', '.service_locator.Hjz3HR0', 'get_ServiceLocator_Hjz3HR0Service', true],
            'App\\Controller\\ProductCategoryController:show' => ['privates', '.service_locator.hsTZOkm', 'get_ServiceLocator_HsTZOkmService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.1QZmUjg', 'get_ServiceLocator_1QZmUjgService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController:new' => ['privates', '.service_locator.Hjz3HR0', 'get_ServiceLocator_Hjz3HR0Service', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.5OibA2.', 'get_ServiceLocator_5OibA2_Service', true],
            'App\\Controller\\ProductSubCategoryController:delete' => ['privates', '.service_locator.dDxCb1f', 'get_ServiceLocator_DDxCb1fService', true],
            'App\\Controller\\ProductSubCategoryController:edit' => ['privates', '.service_locator.dDxCb1f', 'get_ServiceLocator_DDxCb1fService', true],
            'App\\Controller\\ProductSubCategoryController:index' => ['privates', '.service_locator.X8X8vqk', 'get_ServiceLocator_X8X8vqkService', true],
            'App\\Controller\\ProductSubCategoryController:new' => ['privates', '.service_locator.Hjz3HR0', 'get_ServiceLocator_Hjz3HR0Service', true],
            'App\\Controller\\ProductSubCategoryController:show' => ['privates', '.service_locator.81yOsNV', 'get_ServiceLocator_81yOsNVService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ProductCategoryController::delete' => '?',
            'App\\Controller\\ProductCategoryController::edit' => '?',
            'App\\Controller\\ProductCategoryController::index' => '?',
            'App\\Controller\\ProductCategoryController::new' => '?',
            'App\\Controller\\ProductCategoryController::show' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::new' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\ProductSubCategoryController::delete' => '?',
            'App\\Controller\\ProductSubCategoryController::edit' => '?',
            'App\\Controller\\ProductSubCategoryController::index' => '?',
            'App\\Controller\\ProductSubCategoryController::new' => '?',
            'App\\Controller\\ProductSubCategoryController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ProductCategoryController:delete' => '?',
            'App\\Controller\\ProductCategoryController:edit' => '?',
            'App\\Controller\\ProductCategoryController:index' => '?',
            'App\\Controller\\ProductCategoryController:new' => '?',
            'App\\Controller\\ProductCategoryController:show' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:new' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\ProductSubCategoryController:delete' => '?',
            'App\\Controller\\ProductSubCategoryController:edit' => '?',
            'App\\Controller\\ProductSubCategoryController:index' => '?',
            'App\\Controller\\ProductSubCategoryController:new' => '?',
            'App\\Controller\\ProductSubCategoryController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
