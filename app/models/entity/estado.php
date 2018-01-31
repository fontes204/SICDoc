<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:35
 */
class Estado extends Atributo
{
    protected $_id;
    protected $_nome;
    protected $_fase;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->_nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->_nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getFase()
    {
        return $this->_fase;
    }

    /**
     * @param mixed $fase
     */
    public function setFase($fase)
    {
        $this->_fase = $fase;
    }
}