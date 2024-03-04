<?php

namespace ContainerDnEHKEU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLivraisonControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LivraisonController' shared autowired service.
     *
     * @return \App\Controller\LivraisonController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LivraisonController.php';

        $container->services['App\\Controller\\LivraisonController'] = $instance = new \App\Controller\LivraisonController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\LivraisonController', $container));

        return $instance;
    }
}