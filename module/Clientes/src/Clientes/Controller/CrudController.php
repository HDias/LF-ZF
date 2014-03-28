<?php
namespace Clientes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

abstract class CrudController extends AbstractActionController{

	protected $dm;
	protected $document;
	protected $route;
	protected $controller;
	
	public function indexAction(){
		$list = $this->getEm()
		->getRepository($this->document)
		->findAll();
			
		return new ViewModel(
				array('home' => $list)
				);
	}
	
	public function sobreAction(){
		return new ViewModel();
	}
	protected function getEm(){
		if(null === $this->dm)
			$this->dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
		
		return $this->dm;
	}
	
	
}