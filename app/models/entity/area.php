<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:21
 */
class Area extends Atributo
{
    protected $_id;
    protected $_nome;
    protected $_sigla;

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
    public function getSigla()
    {
        return $this->_sigla;
    }

    /**
     * @param mixed $sigla
     */
    public function setSigla($sigla)
    {
        $this->_sigla = $sigla;
    }
}