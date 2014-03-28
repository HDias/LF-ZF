<?php
namespace Clientes;

use Clientes\Document\User as UserDocument;

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
    
    public function getServiceConfig(){
    	return array(
    			'factories' => array(
    					'Clientes\Document\User' => function($service){
    						return new UserDocument($service->get('doctrine.documentmanager.odm_default'));
    					},
    			),
    	);
    }
    
}
