<?php

/**
 * Created by PhpStorm.
 * User: Joao Pereira
 * Date: 28-jan-2018
 * Time: 09:36
 */
class Cliente extends Atributo
{
    protected $_id;
    protected $_nome;
    protected $_genero;
    protected $_bi;
    protected $_nif;

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
    public function getGenero()
    {
        return $this->_genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->_genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getBi()
    {
        return $this->_bi;
    }

    /**
     * @param mixed $bi
     */
    public function setBi($bi)
    {
        $this->_bi = $bi;
    }

    /**
     * @return mixed
     */
    public function getNif()
    {
        return $this->_nif;
    }

    /**
     * @param mixed $nif
     */
    public function setNif($nif)
    {
        $this->_nif = $nif;
    }

}