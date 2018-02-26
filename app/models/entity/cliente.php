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
    protected $_estado_civil;
    protected $_bi;
    protected $_nif;
    protected $_nome_esposa;
    protected $_n_bi_esposa;
    protected $_regime_casamento;

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

    /**
     * @return mixed
     */
    public function getNomeEsposa()
    {
        return $this->_nome_esposa;
    }

    /**
     * @param mixed $nome_esposa
     */
    public function setNomeEsposa($nome_esposa)
    {
        $this->_nome_esposa = $nome_esposa;
    }

    /**
     * @return mixed
     */
    public function getEstadoCivil()
    {
        return $this->_estado_civil;
    }

    /**
     * @param mixed $estado_civil
     */
    public function setEstadoCivil($estado_civil)
    {
        $this->_estado_civil = $estado_civil;
    }

    /**
     * @return mixed
     */
    public function getNBiEsposa()
    {
        return $this->_n_bi_esposa;
    }

    /**
     * @param mixed $n_bi_esposa
     */
    public function setNBiEsposa($n_bi_esposa)
    {
        $this->_n_bi_esposa = $n_bi_esposa;
    }

    /**
     * @return mixed
     */
    public function getRegimeCasamento()
    {
        return $this->_regime_casamento;
    }

    /**
     * @param mixed $regime_casamento
     */
    public function setRegimeCasamento($regime_casamento)
    {
        $this->_regime_casamento = $regime_casamento;
    }
}