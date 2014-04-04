<?php
namespace Clientes;

use Clientes\Service\ClientesService;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig(){
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    /*
    public function getServiceConfig(){
    	return array(
    			'factories' => array(
    					'Clientes\Service\ClientesService' => function($service){
    						return new ClientesService($service->get('doctrine.documentmanager.odm_default'));
    					},
    			),
    	);
    }*/
    
}
