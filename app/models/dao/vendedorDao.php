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
            return true;
        else
            return false;
    }
}