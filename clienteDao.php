<?php

/**
 * Created by PhpStorm.
 * User: Sonia Cabuita
 * Date: 28-jan-2018
 * Time: 09:37
 */
class ClienteDao extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function criarCliente(Cliente $cliente)
    {
        if($this->insert($cliente->parametro()))
            return 1;
        else
            return 0;
    }
}