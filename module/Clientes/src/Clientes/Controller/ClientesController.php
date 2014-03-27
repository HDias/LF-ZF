<?php
namespace Clientes\Controller;

use Zend\View\Model\ViewModel;

use Zend\Mvc\Controller\AbstractActionController;

class ClientesController extends AbstractActionController{
	
	public function indexAction(){
			
		return new ViewModel();	
	}
	
}