<?php

/**
 * Created by PhpStorm.
 * User: Sonia Cabuita
 * Date: 03/01/18
 * Time: 21:05
 */
class ProcessoController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function criar_processo()
    {
           /* $conta=new Conta();
            $contaDao=new ContaDao();
            $conta->setUtilizador(htmlentities(addslashes(filter_input(INPUT_POST,'user'))));
            $conta->setTelefone(htmlentities(addslashes(filter_input(INPUT_POST,'user'))));
            $conta->setSenha(htmlentities(addslashes(Hash::create('md5',(filter_input(INPUT_POST,'senha')),HASH_PASSWORD_KEY))));*/

            echo json_encode(1);//$contaDao->logon($conta);
    }
}