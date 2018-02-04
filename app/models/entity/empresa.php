<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:15
 */
class Empresa extends Atributo
{
    protected $_id;
    protected $_id_vendedor;
    protected $_nome_representate;
    protected $_n_bi_representate;
    protected $_bi_representate;
    protected $_certidao_comercial;

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
    public function getNomeRepresentate()
    {
        return $this->_nome_representate;
    }

    /**
     * @param mixed $nome_representate
     */
    public function setNomeRepresentate($nome_representate)
    {
        $this->_nome_representate = $nome_representate;
    }

    /**
     * @return mixed
     */
    public function getNBiRepresentate()
    {
        return $this->_n_bi_representate;
    }

    /**
     * @param mixed $n_bi_representate
     */
    public function setNBiRepresentate($n_bi_representate)
    {
        $this->_n_bi_representate = $n_bi_representate;
    }

    /**
     * @return mixed
     */
    public function getBiRepresentate()
    {
        return $this->_bi_representate;
    }

    /**
     * @param mixed $bi_representate
     */
    public function setBiRepresentate($bi_representate)
    {
        $this->_bi_representate = $bi_representate;
    }

    /**
     * @return mixed
     */
    public function getCertidaoComercia()
    {
        return $this->_certidao_comercial;
    }

    /**
     * @param mixed $certidao_comercia
     */
    public function setCertidaoComercia($certidao_comercial)
    {
        $this->_certidao_comercial = $certidao_comercial;
    }
}