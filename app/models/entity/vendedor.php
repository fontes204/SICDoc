<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:05
 */
class Vendedor extends Atributo
{
    protected $_id;
    protected $_nome;
    protected $_n_nif;
    protected $_nif;
    protected $_caminho_nif;

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
    public function getNNif()
    {
        return $this->_n_nif;
    }

    /**
     * @param mixed $n_nif
     */
    public function setNNif($n_nif)
    {
        $this->_n_nif = $n_nif;
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

    /**
     * @return mixed
     */
    public function getCaminhoNif()
    {
        return $this->_caminho_nif;
    }

    /**
     * @param mixed $caminho_nif
     */
    public function setCaminhoNif($caminho_nif)
    {
        $this->_caminho_nif = $caminho_nif;
    }
}