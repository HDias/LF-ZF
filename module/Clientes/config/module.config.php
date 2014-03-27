<?php
namespace Clientes;
return array(
		'controllers' => array(
				'invokables' => array(
						'ClientesController' => 'Clientes\Controller\ClientesController',
				),
		),
		'router' => array(
				'routes' => array(
						'home' => array(
								'type'      => 'Literal',
								'options'   => array(
										'route'    => '/',
										'defaults' => array(
												'controller' => 'ClientesController',
												'action'     => 'index',
										),
								),
						),
						
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
						'layout/layout'     => __DIR__ . '/../view/layout/layout.phtml',
						'clientes/clientes/index' => __DIR__ . '/../view/clientes/clientes/index.phtml',
						'error/404'         => __DIR__ . '/../view/error/404.phtml',
						'error/index'       => __DIR__ . '/../view/error/index.phtml',
				),
				'template_path_stack' => array(
						__DIR__ . '/../view',
				),
		),
);