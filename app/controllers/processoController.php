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
   /*     $msg = null;
        $cliente=new Cliente();
        $clienteDao=new ClienteDao();
        $this->ultimoId('cliente',$cliente,$clienteDao);

        $cliente->setNome(htmlentities(addslashes(filter_input(INPUT_POST,'nome'))));
        $cliente->setGenero(htmlentities(addslashes(filter_input(INPUT_POST,'genero'))));
        $cliente->setBi(htmlentities(addslashes(filter_input(INPUT_POST,'n-bi'))));
        $cliente->setNif(htmlentities(addslashes(filter_input(INPUT_POST,'n-nif'))));

        $rtnCliente = $clienteDao->criarCliente($cliente);

        if($rtnCliente == true)
            $ultimoCliente = $clienteDao->ultimoElemento('cliente')->_id;
        else
            $msg += 'Cliente não inserido.<br />';
        */


        $imovel=new Imovel();
        $imovelDao=new ImovelDao();
        $this->ultimoId('imovel',$imovel,$imovelDao);

        $imovel->setNomeCondominio(htmlentities(addslashes(filter_input(INPUT_POST,'nome-condominio'))));
        $imovel->setTipoImovel(htmlentities(addslashes(filter_input(INPUT_POST,'tipo-imovel'))));
        $imovel->setNDescricaoPredio(htmlentities(addslashes(filter_input(INPUT_POST,'n-descricao-predio'))));
        $imovel->setValor(htmlentities(addslashes(filter_input(INPUT_POST,'valor-imovel'))));
     //   $imovel->setIdCliente($ultimoCliente);
     //   $imovel->setIdVendedor($ultimoVendedor);
        $imovel->setIdEstado(1);

        $rtnImovel = $imovelDao->criarImovel($imovel);

        echo $rtnImovel;
        /*
        $processo->setDataNascimento(htmlentities(addslashes(filter_input(INPUT_POST,'data-nascimento'))));
        $processo->setIdArea(htmlentities(addslashes(filter_input(INPUT_POST,'funcao'))));
        $processo->setTelefone(htmlentities(addslashes(filter_input(INPUT_POST,'telefone'))));
        $processo->setEmail(htmlentities(addslashes(filter_input(INPUT_POST,'email'))));
        $processo->setMorada(htmlentities(addslashes(filter_input(INPUT_POST,'morada'))));
        $processo->setFoto(htmlentities(addslashes(filter_input(INPUT_POST,'foto'))));

        $k = $processoDao->criarConta($processo);

        echo json_encode($k);*/
    }

    public function ultimoId($tabela,$objecto,$objectoDao)
    {
        $id = $objectoDao->ultimoElemento($tabela);

        if ($id == false  || !is_object($id)){
            $objecto->setId(1);
           // return $objecto->getId();
        }else {
            $objecto->setId($id->_id + 1);
           // return $objecto->getId();
        }
    }
}