<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:36
 */
class EstadoDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarEstado(Estado $estado)
    {
        if($this->insert($estado->parametro()))
            echo 1;
        else
            echo 0;
    }
}