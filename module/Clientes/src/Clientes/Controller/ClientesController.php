<?php
namespace Clientes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Document\User;

class ClientesController extends AbstractActionController
{
    public function indexAction()
    {/*
    	$dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
    	
    	$user = new User();
    	
    	$user->setFirstName('Horecio');
    	
    	$user->setLastName('Araújo Dias');
    	
    	$dm->persist($user);
    	
    	$dm->flush();
    	
    	print_r($user); exit;*/
        return new ViewModel(
        		//array('teste' => $user)
        		);
    }
}
