<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:07
 */
class VendedorDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarVendedor(Vendedor $vendedor)
    {
        if($this->insert($vendedor->parametro()))
            echo 1;
        else
            echo 0;
    }
}