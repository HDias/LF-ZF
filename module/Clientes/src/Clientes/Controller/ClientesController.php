<?php
namespace Clientes\Controller;

use Clientes\Document\User;

class ClientesController extends CrudController{
	
	public function __construct(){
		$this->document = 'Clientes\Document\User';
		$this->service = 'doctrine.documentmanager.odm_default';
		$this->form = 'Clientes\Form\ClientesForm';
		$this->formThanks = 'Clientes\Form\ThanksForm';
		$this->routeHome = 'home';
		$this->routeThanks = 'thanks';
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
