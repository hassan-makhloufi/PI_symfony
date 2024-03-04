<?php

namespace ContainerLYuOxCw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_50hkjZWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.50hkjZW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.50hkjZW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'forumCategoryRepository' => ['privates', 'App\\Repository\\ForumCategoryRepository', 'getForumCategoryRepositoryService', true],
            'forumRepository' => ['privates', 'App\\Repository\\ForumRepository', 'getForumRepositoryService', true],
        ], [
            'forumCategoryRepository' => 'App\\Repository\\ForumCategoryRepository',
            'forumRepository' => 'App\\Repository\\ForumRepository',
        ]);
    }
}
