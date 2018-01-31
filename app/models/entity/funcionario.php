<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:39
 */
class Funcionario extends Atributo
{
    protected $_id;
    protected $_nome;
    protected $_apelido;
    protected $_num_bi;
    protected $_data_nascimento;
    protected $_genero;
    protected $_telefone;
    protected $_email;
    protected $_morada;
    protected $_id_area;
    protected $_foto;

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
    public function getApelido()
    {
        return $this->_apelido;
    }

    /**
     * @param mixed $apelido
     */
    public function setApelido($apelido)
    {
        $this->_apelido = $apelido;
    }

    /**
     * @return mixed
     */
    public function getNumBi()
    {
        return $this->_num_bi;
    }

    /**
     * @param mixed $num_bi
     */
    public function setNumBi($num_bi)
    {
        $this->_num_bi = $num_bi;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->_data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->_data_nascimento = $data_nascimento;
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
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getMorada()
    {
        return $this->_morada;
    }

    /**
     * @param mixed $morada
     */
    public function setMorada($morada)
    {
        $this->_morada = $morada;
    }

    /**
     * @return mixed
     */
    public function getIdArea()
    {
        return $this->_id_area;
    }

    /**
     * @param mixed $id_area
     */
    public function setIdArea($id_area)
    {
        $this->_id_area = $id_area;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->_foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->_foto = $foto;
    }
}