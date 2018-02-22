<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 30/12/16
 * Time: 15:51
 */
class fileUpload extends Atributo
{
    protected $_id;
    protected $_nome;
    protected $_caminho;
    protected $_id_movel;

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
    public function getIdMovel()
    {
        return $this->_id_movel;
    }

    /**
     * @param mixed $id_movel
     */
    public function setIdMovel($id_movel)
    {
        $this->_id_movel = $id_movel;
    }
}