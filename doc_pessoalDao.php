<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:31
 */
class Doc_PessoalDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarDocPessoal(Doc_Pessoal $doc_pessoal)
    {
        if($this->insert($doc_pessoal->parametro()))
            echo 1;
        else
            echo 0;
    }
}