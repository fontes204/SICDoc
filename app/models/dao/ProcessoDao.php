<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 30/12/16
 * Time: 15:53
 */
class ProcessoDao extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function criarProcesso(Processo $processo)
    {
        if($this->insert($processo->parametro()))
            return 1;
        else
            return 0;
    }

    public function alterar($tabela,$campos,$cond,$valores)
    {
        return $this->editar($tabela,$campos,$cond,$valores);
    }
}
