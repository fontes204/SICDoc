<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 16:46
 */
class PagamentoDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarPagamento(Pagamento $pagamento)
    {
        if($this->insert($pagamento->parametro()))
            echo 1;
        else
            echo 0;
    }
}