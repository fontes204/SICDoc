<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 26-jan-2018
 * Time: 14:47
 */
class FuncionarioController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function criar_funcionario()
    {
        $funcionario=new Funcionario();
        $funcionarioDao=new FuncionarioDao();

        $ultimoId = $funcionarioDao->ultimoElemento('funcionario');

        if($ultimoId == false || !is_object($ultimoId))
            $funcionario->setId(1);
        else
            $funcionario->setId($ultimoId->_id + 1);

        $funcionario->setNome(htmlentities(addslashes(filter_input(INPUT_POST,'nome'))));
        $funcionario->setApelido(htmlentities(addslashes(filter_input(INPUT_POST,'apelido'))));
        $funcionario->setGenero(htmlentities(addslashes(filter_input(INPUT_POST,'genero'))));
        $funcionario->setNumBi(htmlentities(addslashes(filter_input(INPUT_POST,'n-bi'))));
        $funcionario->setDataNascimento(htmlentities(addslashes(filter_input(INPUT_POST,'data-nascimento'))));
        $funcionario->setIdArea(htmlentities(addslashes(filter_input(INPUT_POST,'funcao'))));
        $funcionario->setTelefone(htmlentities(addslashes(filter_input(INPUT_POST,'telefone'))));
        $funcionario->setEmail(htmlentities(addslashes(filter_input(INPUT_POST,'email'))));
        $funcionario->setMorada(htmlentities(addslashes(filter_input(INPUT_POST,'morada'))));
        $funcionario->setFoto(htmlentities(addslashes(filter_input(INPUT_POST,'foto'))));

        $k = $funcionarioDao->criarFuncionario($funcionario);

        echo json_encode($k);
    }
}