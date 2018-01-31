<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:42
 */
class FuncionarioDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarFuncionario(Funcionario $funcionario)
    {
        if ($this->insert($funcionario->parametro()))
            return 1;
        else
            return 0;
    }
}