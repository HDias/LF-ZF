<?php
namespace Clientes\Controller;

use Application\Document\User;

class ClientesController extends CrudController{
	
	public function __construct(){
		$this->document = 'Clientes\Document\User';
		//$this->service = 'Culto\Service\CultoService';
		//$this->form = 'Culto\Form\CultoForm';
		//$this->route = 'home';
		//$this->controller = 'CultoController';		
	}
	/*
    public function indexAction(){
    	$dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
    	
    	$user = new User();
    	
    	$user->setFirstName('Horecio');
    	
    	$user->setLastName('Araújo Dias');
    	
    	$dm->persist($user);
    	
    	$dm->flush();
    	
    	print_r($user); exit;
        return new ViewModel(
        		//array('teste' => $user)
        		);
    }*/
}
