<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:29
 */
class Doc_Pessoal extends Atributo
{
    protected $_id;
    protected $_nome;
    protected $_caminho;
    protected $_tipo;
    protected $_id_cliente;

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
    public function getCaminho()
    {
        return $this->_caminho;
    }

    /**
     * @param mixed $caminho
     */
    public function setCaminho($caminho)
    {
        $this->_caminho = $caminho;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->_tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->_tipo = $tipo;
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
}