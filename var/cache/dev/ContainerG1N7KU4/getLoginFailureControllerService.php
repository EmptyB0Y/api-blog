<?php

namespace ContainerG1N7KU4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginFailureControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LoginFailureController' shared autowired service.
     *
     * @return \App\Controller\LoginFailureController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LoginFailureController.php';

        $container->services['App\\Controller\\LoginFailureController'] = $instance = new \App\Controller\LoginFailureController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\LoginFailureController', $container));

        return $instance;
    }
}
