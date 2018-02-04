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
    protected $_contrato;
    protected $_termo_quitacao;
    protected $_certidao_predial;

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
    public function getContrato()
    {
        return $this->_contrato;
    }

    /**
     * @param mixed $contrato
     */
    public function setContrato($contrato)
    {
        $this->_contrato = $contrato;
    }

    /**
     * @return mixed
     */
    public function getTermoQuitacao()
    {
        return $this->_termo_quitacao;
    }

    /**
     * @param mixed $termo_quitacao
     */
    public function setTermoQuitacao($termo_quitacao)
    {
        $this->_termo_quitacao = $termo_quitacao;
    }

    /**
     * @return mixed
     */
    public function getCertidaoPredial()
    {
        return $this->_certidao_predial;
    }

    /**
     * @param mixed $certidao_predial
     */
    public function setCertidaoPredial($certidao_predial)
    {
        $this->_certidao_predial = $certidao_predial;
    }
}