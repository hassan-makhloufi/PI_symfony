<?php

namespace ContainerDnEHKEU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SqsYF3LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SqsYF3L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SqsYF3L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'flasher' => ['services', 'flasher', 'getFlasherService', false],
            'forumRepository' => ['privates', 'App\\Repository\\ForumRepository', 'getForumRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'entityManager' => '?',
            'flasher' => '?',
            'forumRepository' => 'App\\Repository\\ForumRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
