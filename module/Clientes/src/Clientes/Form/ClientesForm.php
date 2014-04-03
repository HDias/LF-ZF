<?php
namespace Clientes\Form;

use Zend\Form\Element\File;

use Zend\Form\Form;

use Zend\Form\Element\Hidden,
	Zend\Form\Element\Text,
	Zend\Form\Element\Csrf,
	Zend\Form\Element\DateTime,
	Zend\Form\Element\Select,
	Zend\Form\Element\Button;

class ClientesForm extends Form{
	public function __construct($name = null)
	{
		parent::__construct('cultoform');

		$this->setAttribute('method', 'post');
		//$this->setInputFilter(new CultoFilter());
		
		$this->add(array(
				'name' => 'id',
				'type' => 'Hidden',
		));
		
		$this->add(array(
				'name' => 'firstName',
				'type' => 'Text',
				'attributes' => array(
						'required' => true,
						'id' => 'firstName',
						'class' => 'form-control',
						'placeholder'=> 'Digite aqui...',
						'maxlength' => '100',
				),
				'options' => array(
						'label' => 'Primeiro Nome: ',
						),				
		));

		$this->add(array(
				'name' => 'lastName',
				'type' => 'Text',
				'attributes' => array(
						'required' => true,
						'id' => 'lastName',
						'class' => 'form-control',
						'placeholder'=> 'Digite aqui...',
						'maxlength' => '100',
				),
				'options' => array(
						'label' => 'Sobrenome: ',
				),
		));

		
		$this->add(array(
				'name' => 'submit',
				'type' => 'Submit',
				'attributes' => array(
						'id' => 'submitbutton',
						'class' =>'btn btn-primary',
				),
		));
	}
}