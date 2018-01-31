<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 09:55
 */
class ImovelDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarImovel(Imovel $imovel)
    {
        if($this->insert($imovel->parametro()))
            echo 1;
        else
            echo 0;
    }
}