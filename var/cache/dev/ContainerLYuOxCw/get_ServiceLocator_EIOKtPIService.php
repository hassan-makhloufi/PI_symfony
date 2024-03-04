<?php

namespace ContainerLYuOxCw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EIOKtPIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EIOKtPI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EIOKtPI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'forumCategory' => ['privates', 'App\\Repository\\ForumCategoryRepository', 'getForumCategoryRepositoryService', true],
        ], [
            'forumCategory' => 'App\\Repository\\ForumCategoryRepository',
        ]);
    }
}
