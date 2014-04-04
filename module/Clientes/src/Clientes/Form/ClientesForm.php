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
				'name' => 'nome',
				'type' => 'Text',
				'attributes' => array(
						'required' => true,
						'id' => 'nome',
						'class' => 'form-control',
						'placeholder'=> 'Digite aqui...',
						'maxlength' => '100',
				),
				'options' => array(
						'label' => 'Nome: ',
						),				
		));

		$this->add(array(
				'name' => 'email',
				'type' => 'Text',
				'attributes' => array(
						'required' => true,
						'id' => 'email',
						'class' => 'form-control',
						'placeholder'=> 'Digite aqui...',
						'maxlength' => '100',
				),
				'options' => array(
						'label' => 'Email: ',
				),
		));
		
		$this->add(array(
				'name' => 'telefone',
				'type' => 'Text',
				'attributes' => array(
						'required' => true,
						'id' => 'telefone',
						'class' => 'form-control',
						'placeholder'=> 'Digite aqui...',
						'maxlength' => '100',
				),
				'options' => array(
						'label' => 'Telefone: ',
				),
		));
		
		$this->add(array(
				'name' => 'setor',
				'type' => 'Text',
				'attributes' => array(
						'required' => true,
						'id' => 'setor',
						'class' => 'form-control',
						'placeholder'=> 'Digite aqui...',
						'maxlength' => '100',
				),
				'options' => array(
						'label' => 'Setor: ',
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