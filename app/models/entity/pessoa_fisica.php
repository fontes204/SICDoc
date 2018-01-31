<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:10
 */
class Pessoa_Fisica extends Atributo
{
    protected $_id;
    protected $_id_vendedor;
    protected $_n_bi;
    protected $_bi;
    protected $_caminho_bi;

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
    public function getIdVendedor()
    {
        return $this->_id_vendedor;
    }

    /**
     * @param mixed $id_vendedor
     */
    public function setIdVendedor($id_vendedor)
    {
        $this->_id_vendedor = $id_vendedor;
    }

    /**
     * @return mixed
     */
    public function getNBi()
    {
        return $this->_n_bi;
    }

    /**
     * @param mixed $n_bi
     */
    public function setNBi($n_bi)
    {
        $this->_n_bi = $n_bi;
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
    public function getCaminhoBi()
    {
        return $this->_caminho_bi;
    }

    /**
     * @param mixed $caminho_bi
     */
    public function setCaminhoBi($caminho_bi)
    {
        $this->_caminho_bi = $caminho_bi;
    }
}