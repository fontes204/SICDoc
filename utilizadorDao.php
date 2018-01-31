<?php

/**
 * Created by PhpStorm.
 * User: JOÃO FONTES PEREIRA
 * Date: 06/10/2016
 * Time: 15:52
 */
class UtilizadorDao extends Model
{
    public function __construct() {
        parent::__construct();
    }

    public function registar(Utilizador $utilizador)
    {
        if($this->insert($utilizador->parametro()))
            return $this->ultimoElemento($utilizador->pegarClasse())->_id;
        else
            return 0;
    }

}