<?php

namespace ContainerVy8lUvd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6fwEAbDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6fwEAbD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6fwEAbD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'disc' => ['privates', '.errored..service_locator.6fwEAbD.App\\Entity\\Disc', NULL, 'Cannot autowire service ".service_locator.6fwEAbD": it references class "App\\Entity\\Disc" but no such service exists.'],
            'discRepository' => ['privates', 'App\\Repository\\DiscRepository', 'getDiscRepositoryService', true],
        ], [
            'disc' => 'App\\Entity\\Disc',
            'discRepository' => 'App\\Repository\\DiscRepository',
        ]);
    }
}
