<?php

namespace ContainerT6p2iTE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegionTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\RegionType' shared autowired service.
     *
     * @return \App\Form\RegionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/RegionType.php';

        return $container->privates['App\\Form\\RegionType'] = new \App\Form\RegionType();
    }
}
