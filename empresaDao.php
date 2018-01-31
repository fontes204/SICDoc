<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:17
 */
class EmpresaDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarEmpresa(Empresa $empresa)
    {
        if($this->insert($empresa->parametro()))
            echo 1;
        else
            echo 0;
    }
}