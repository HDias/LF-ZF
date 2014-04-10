<?php
namespace Clientes;

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
		
	'controllers' => array(
			'invokables' => array(
					'CLientesController' => 'Clientes\Controller\ClientesController'
			),
	),
		
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'CLientesController',
                        'action'     => 'index',
                    ),
                ),
            ),
        		'thanks' => array(
        				'type' => 'Zend\Mvc\Router\Http\Literal',
        				'options' => array(
        						'route'    => '/obrigado',
        						'defaults' => array(
        								'controller' => 'CLientesController',
        								'action'     => 'thanks',
        						),
        				),
        		),
        		'clientes' => array(
        				'type'      => 'Segment',
        				'options'   => array(
        						'route'    => '/clientes[/:action][/:id]',
        						'constraints' => array(
        								'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
        								'id'     => '[0-9]+',
        						),
        						'defaults' => array(
        								'controller' => 'ClientesController',
        								'action'     => 'index',
        						),
        				),
        		),
        		
            /*'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),*/
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
    ),
    
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'clientes/index/index' => __DIR__ . '/../view/clientes/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    
    'doctrine' => array(
	    'driver' => array(
	        'orm_driver' => array(
	            'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
	            'cache' => 'array',
	            'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
	        ),
	        'orm_default' => array(
	            'drivers' => array(
	                __NAMESPACE__ . '\Entity' => 'orm_driver'
	            )
	        ),
	        'odm_driver' => array(
	            'class' => 'Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver',          
	            'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Document')
	        ),
	        'odm_default' => array(
	            'drivers' => array(
	                __NAMESPACE__ . '\Document' => 'odm_driver'
	            )
	        )                   
    )
)  
   
);
