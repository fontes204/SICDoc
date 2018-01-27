<?php


class Utilizador extends Atributo
{


    protected $_id;
    protected $_nome;
    protected $_num_bi;
    protected $_data_nascimento;
    protected $_genero;
    protected $_telefone;
    protected $_email;
    protected $_nivel_escolar;
    protected $_morada;
    protected $_id_funcao;

    public function Utilizador()
    {

    }
    function get_id() {
        return $this->_id;
    }

    function get_nome() {
        return $this->_nome;
    }

    function get_numBI() {
        return $this->_num_bi;
    }

    function get_morada() {
        return $this->_morada;
    }

    function get_dataNascimento() {
        return $this->_data_nascimento;
    }

    function get_genero() {
        return $this->_genero;
    }

    function get_telefone() {
        return $this->_telefone;
    }

    function get_email() {
        return $this->_email;
    }


    function get_nivelEscolar() {
        return $this->_nivel_escolar;
    }

    function get_idfuncao() {
        return $this->_id_funcao;
    }


    function set_id($_id) {
        $this->_id = $_id;
    }

    function set_nome($_nome) {
        $this->_nome = $_nome;
    }

    function set_numBI($_numBI) {
        $this->_num_bi = $_numBI;
    }

    function set_morada($_morada) {
        $this->_morada = $_morada;
    }

    function set_dataNascimento($_dataNascimento) {
        $this->_data_nascimento = $_dataNascimento;
    }

    function set_genero($_genero) {
        $this->_genero = $_genero;
    }

    function set_telefone($_telefone) {
        $this->_telefone = $_telefone;
    }

    function set_email($_email) {
        $this->_email = $_email;
    }


    function set_nivelEscolar($_nivelEscolar) {
        $this->_nivel_escolar = $_nivelEscolar;
    }



    function set_idfuncao($_idfuncao) {
        $this->_id_funcao = $_idfuncao;
    }

}