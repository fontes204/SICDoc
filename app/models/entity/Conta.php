<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 30/12/16
 * Time: 15:51
 */
class Conta extends Atributo
{
    protected $_id;
    protected $_telefone;
    protected $_utilizador;
    protected $_senha;
    protected $_estado;
    protected $_id_funcionario;

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
    public function getTelefone()
    {
        return $this->_telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->_telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getUtilizador()
    {
        return $this->_utilizador;
    }

    /**
     * @param mixed $utilizador
     */
    public function setUtilizador($utilizador)
    {
        $this->_utilizador = $utilizador;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->_senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->_senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->_estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->_estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getIdFuncionario()
    {
        return $this->_id_funcionario;
    }

    /**
     * @param mixed $id_funcionario
     */
    public function setIdFuncionario($id_funcionario)
    {
        $this->_id_funcionario = $id_funcionario;
    }

}