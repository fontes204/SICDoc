<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:12
 */
class Pessoa_FisicaDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarPessoaFisica(Pessoa_Fisica $pessoa_fisica)
    {
        if($this->insert($pessoa_fisica->parametro()))
            echo 1;
        else
            echo 0;
    }
}