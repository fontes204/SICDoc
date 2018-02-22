<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:26
 */
class Doc_GeradoDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarDoc_gerado(Doc_Gerado $doc_Gerado)
    {
        if ($this->insert($doc_Gerado->parametro()))
            return 1;
        else
            return 0;
    }
}