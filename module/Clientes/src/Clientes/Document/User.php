<?php
namespace Clientes\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document(collection="user") */
class User{
	
    /** @ODM\Id */
    private $id;

    /** @ODM\Field(type="string") */
    private $nome;

    /** @ODM\Field(type="string") */
    private $email;
    
    /** @ODM\Field(type="string") */
    private $telefone;
    
    /** @ODM\Field(type="string") */
    private $setor;
    
    /**
     * @return the $id
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @return the $telefone
     */
    public function getTelefone()
    {
    	return $this->telefone;
    }
    
    /**
     * @return the $setor
     */
    public function getSetor()
    {
    	return $this->setor;
    }

    /**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param field_type $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param field_type $telefone
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    
    /**
     * @param field_type $telefone
     */
    public function setTelefone($telefone)
    {
    	$this->telefone = $telefone;
    	return $this;
    }
    
    /**
     * @param field_type $setor
     */
    public function setSetor($setor)
    {
    	$this->setor = $setor;
    	return $this;
    }
}