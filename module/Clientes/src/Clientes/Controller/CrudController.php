<?php
namespace Clientes\Controller;

use Zend\Session\Container;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Clientes\Document\Configurator;

abstract class CrudController extends AbstractActionController{

	protected $dm;
	protected $document;
	protected $form;
	protected $routeHome;
	protected $routeThanks;
	protected $controller;
	protected $service;
	
	public function indexAction(){
		$list = $this->getDm()
		->getRepository($this->document)
		->findAll();
		//print_r($list); exit;
			
		return new ViewModel(
				array('home' => $list)
				);
	}
	public function thanksAction(){
		
		$thanksLF = new Container();
		
		return new ViewModel(
				array(	
						'nome' => $thanksLF->nome,
						)
				);
		unset($thanksLF->nome);
	}
	
public function addAction(){
		
		$form = new $this->form();	
		$form->get('submit')->setValue('Salvar');
		
		$request = $this->getRequest();
		
		if ($request->isPost()){
			
			$form->setData($request->getPost());
			
			if ($form->isValid()) {
				$data = $request->getPost()->toArray();
				$thanksLF = new Container();
				$thanksLF->nome = $data['nome'];
				
				$dm = $this->getServiceLocator()->get($this->service);
				$document = new $this->document();
								
				Configurator::configure($document, $request->getPost()->toArray());
							
				$dm->persist($document);
				$dm->flush();

				return $this->redirect()->toRoute($this->routeThanks, array('nome' => 'Horecio'));
				}
				//else					
					//$this->flashMessenger()->addErrorMessage("Erro ao adicionar culto");
		}			
		return new ViewModel(
				array(	'form' => $form,
				));
	}
	protected function getDm(){
		if(null === $this->dm)
			$this->dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
		return $this->dm;
	}
	
	
}