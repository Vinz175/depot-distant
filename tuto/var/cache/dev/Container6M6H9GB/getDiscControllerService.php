<?php

namespace Container6M6H9GB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDiscControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DiscController' shared autowired service.
     *
     * @return \App\Controller\DiscController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DiscController.php';

        $container->services['App\\Controller\\DiscController'] = $instance = new \App\Controller\DiscController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\DiscController', $container));

        return $instance;
    }
}
