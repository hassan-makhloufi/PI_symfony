<?php

namespace ContainerLYuOxCw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XDpc4FKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XDpc4FK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XDpc4FK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'forumRepository' => ['privates', 'App\\Repository\\ForumRepository', 'getForumRepositoryService', true],
            'likeRepository' => ['privates', 'App\\Repository\\LikeRepository', 'getLikeRepositoryService', true],
        ], [
            'entityManager' => '?',
            'forumRepository' => 'App\\Repository\\ForumRepository',
            'likeRepository' => 'App\\Repository\\LikeRepository',
        ]);
    }
}
