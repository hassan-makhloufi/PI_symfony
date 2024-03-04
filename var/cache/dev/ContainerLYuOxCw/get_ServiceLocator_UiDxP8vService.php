<?php

namespace ContainerLYuOxCw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UiDxP8vService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UiDxP8v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UiDxP8v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'flasher' => ['services', 'flasher', 'getFlasherService', false],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'entityManager' => '?',
            'flasher' => '?',
        ]);
    }
}