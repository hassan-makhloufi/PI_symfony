<?php

namespace ContainerWz7cxoq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0HtAhFcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0HtAhFc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0HtAhFc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'flasher' => ['services', 'flasher', 'getFlasherService', false],
            'validator' => ['privates', 'validator', 'getValidatorService', true],
        ], [
            'em' => '?',
            'flasher' => '?',
            'validator' => '?',
        ]);
    }
}
