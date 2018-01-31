<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 10:00
 */
class Localizacao extends Atributo
{
    protected $_id;
    protected $_n_condominio;
    protected $_quadra;
    protected $_lote;
    protected $_tipo_habitacao;
    protected $_tipo_lote;
    protected $_metragem_habitacao;
    protected $_metragem_lote;
    protected $_id_imovel;

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
    public function getNCondominio()
    {
        return $this->_n_condominio;
    }

    /**
     * @param mixed $n_condominio
     */
    public function setNCondominio($n_condominio)
    {
        $this->_n_condominio = $n_condominio;
    }

    /**
     * @return mixed
     */
    public function getQuadra()
    {
        return $this->_quadra;
    }

    /**
     * @param mixed $quadra
     */
    public function setQuadra($quadra)
    {
        $this->_quadra = $quadra;
    }

    /**
     * @return mixed
     */
    public function getLote()
    {
        return $this->_lote;
    }

    /**
     * @param mixed $lote
     */
    public function setLote($lote)
    {
        $this->_lote = $lote;
    }

    /**
     * @return mixed
     */
    public function getTipoHabitacao()
    {
        return $this->_tipo_habitacao;
    }

    /**
     * @param mixed $tipo_habitacao
     */
    public function setTipoHabitacao($tipo_habitacao)
    {
        $this->_tipo_habitacao = $tipo_habitacao;
    }

    /**
     * @return mixed
     */
    public function getTipoLote()
    {
        return $this->_tipo_lote;
    }

    /**
     * @param mixed $tipo_lote
     */
    public function setTipoLote($tipo_lote)
    {
        $this->_tipo_lote = $tipo_lote;
    }

    /**
     * @return mixed
     */
    public function getMetragemHabitacao()
    {
        return $this->_metragem_habitacao;
    }

    /**
     * @param mixed $metragem_habitacao
     */
    public function setMetragemHabitacao($metragem_habitacao)
    {
        $this->_metragem_habitacao = $metragem_habitacao;
    }

    /**
     * @return mixed
     */
    public function getMetragemLote()
    {
        return $this->_metragem_lote;
    }

    /**
     * @param mixed $metragem_lote
     */
    public function setMetragemLote($metragem_lote)
    {
        $this->_metragem_lote = $metragem_lote;
    }

    /**
     * @return mixed
     */
    public function getIdImovel()
    {
        return $this->_id_imovel;
    }

    /**
     * @param mixed $id_imovel
     */
    public function setIdImovel($id_imovel)
    {
        $this->_id_imovel = $id_imovel;
    }
}