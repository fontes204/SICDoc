<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:00
 */
class LocalizacaoDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarLocalizacao(Localizacao $localizacao)
    {
        if($this->insert($localizacao->parametro()))
            return true;
        else
            return false;
    }
}