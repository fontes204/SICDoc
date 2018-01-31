<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 09:48
 */
class Imovel extends Atributo
{
    protected $_id;
    protected $_nome_condominio;
    protected $_tipo_imovel;
    protected $_n_descricao_predio;
    protected $_matriz_predial;
    protected $_valor;
    protected $_id_cliente;
    protected $_id_vendedor;
    protected $_id_estado;

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
    public function getNomeCondominio()
    {
        return $this->_nome_condominio;
    }

    /**
     * @param mixed $nome_condominio
     */
    public function setNomeCondominio($nome_condominio)
    {
        $this->_nome_condominio = $nome_condominio;
    }

    /**
     * @return mixed
     */
    public function getTipoImovel()
    {
        return $this->_tipo_imovel;
    }

    /**
     * @param mixed $tipo_imovel
     */
    public function setTipoImovel($tipo_imovel)
    {
        $this->_tipo_imovel = $tipo_imovel;
    }

    /**
     * @return mixed
     */
    public function getNDescricaoPredio()
    {
        return $this->_n_descricao_predio;
    }

    /**
     * @param mixed $n_descricao_predio
     */
    public function setNDescricaoPredio($n_descricao_predio)
    {
        $this->_n_descricao_predio = $n_descricao_predio;
    }

    /**
     * @return mixed
     */
    public function getMatrizPredial()
    {
        return $this->_matriz_predial;
    }

    /**
     * @param mixed $matriz_predial
     */
    public function setMatrizPredial($matriz_predial)
    {
        $this->_matriz_predial = $matriz_predial;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->_valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->_valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->_id_cliente;
    }

    /**
     * @param mixed $id_cliente
     */
    public function setIdCliente($id_cliente)
    {
        $this->_id_cliente = $id_cliente;
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
    public function getIdEstado()
    {
        return $this->_id_estado;
    }

    /**
     * @param mixed $id_estado
     */
    public function setIdEstado($id_estado)
    {
        $this->_id_estado = $id_estado;
    }

}