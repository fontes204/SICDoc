<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:44
 */
class Pagamento extends Atributo
{
    protected $_id;
    protected $_nome;
    protected $_estado;
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