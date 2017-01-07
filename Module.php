<?php

namespace CanariumAirbnbQuote;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
            'canarium.airbnb_quote.service' => 'CanariumAirbnbQuote\Service\AirbnbQuote',
            ),
            'factories' => array(
                'canarium.airbnb_quote.module_option' => function ($sm) {
                    $config = $sm->get('Config');
                    return new Options\ModuleOptions(isset($config['canariumairbnbquote']) ? $config['canariumairbnbquote'] : array());
                }
            )
        );
    }

}
