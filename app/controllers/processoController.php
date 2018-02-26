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
        $msg = '';
        $rtnEmpresa = false;
        $rtnPessoa = false;

        $cliente=new Cliente();
        $clienteDao=new ClienteDao();
        $this->ultimoId('cliente',$cliente,$clienteDao);

        $cliente->setNome(htmlentities(addslashes(filter_input(INPUT_POST,'nome'))));
        $cliente->setGenero(htmlentities(addslashes(filter_input(INPUT_POST,'genero'))));
        $cliente->setBi(htmlentities(addslashes(filter_input(INPUT_POST,'n-bi'))));
        $cliente->setNif(htmlentities(addslashes(filter_input(INPUT_POST,'n-nif'))));
        $cliente->setEstadoCivil(htmlentities(addslashes(filter_input(INPUT_POST,'estado-civil'))));
        $cliente->setNomeEsposa(htmlentities(addslashes(filter_input(INPUT_POST,'nome-esposa'))));
        $cliente->setNBiEsposa(htmlentities(addslashes(filter_input(INPUT_POST,'n-bi-esposa'))));
        $cliente->setRegimeCasamento(htmlentities(addslashes(filter_input(INPUT_POST,'regime-casamento'))));

        $rtnCliente = $clienteDao->criarCliente($cliente);

        if($rtnCliente == true) {
            $ultimoCliente = $clienteDao->ultimoElemento('cliente')->_id;
        }else {
            $msg += 'Cliente não inserido.<br />';
        }


        $vendedor=new Vendedor();
        $vendedorDao=new VendedorDao();
        $this->ultimoId('vendedor',$vendedor,$vendedorDao);

        $vendedor->setNome(htmlentities(addslashes(filter_input(INPUT_POST,'nome-vendedor'))));
        $vendedor->setContrato(htmlentities(addslashes(filter_input(INPUT_POST,'contrato-1'))));
        $vendedor->setTermoQuitacao(htmlentities(addslashes(filter_input(INPUT_POST,'termo-quitacao-1'))));
        $vendedor->setCertidaoPredial(htmlentities(addslashes(filter_input(INPUT_POST,'certidao-predial-1'))));

        $checkBtn = htmlentities(addslashes(filter_input(INPUT_POST,'check-btn')));


        if ($checkBtn == 1){
            $vendedor->setNNif(htmlentities(addslashes(filter_input(INPUT_POST,'n-nif-empresa'))));
            $vendedor->setNif(htmlentities(addslashes(filter_input(INPUT_POST,'nif-empresa-1'))));

            $rtnVendedor = $vendedorDao->criarVendedor($vendedor);

            if ($rtnVendedor == true){
                $empresa=new Empresa();
                $empresaDao=new EmpresaDao();
                $this->ultimoId('empresa',$empresa,$empresaDao);

                $empresa->setIdVendedor($vendedor->getId());
                $empresa->setNomeRepresentate(htmlentities(addslashes(filter_input(INPUT_POST,'nome-responsavel'))));
                $empresa->setNBiRepresentate(htmlentities(addslashes(filter_input(INPUT_POST,'n-bi-responsavel'))));
                $empresa->setBiRepresentate(htmlentities(addslashes(filter_input(INPUT_POST,'bi-responsavel-1'))));
                $empresa->setCertidaoComercia(htmlentities(addslashes(filter_input(INPUT_POST,'certidao-comercial-1'))));

                $rtnEmpresa = $empresaDao->criarEmpresa($empresa);

                if ($rtnEmpresa == true){

                }else{
                    $msg += 'Empresa não inserida.<br />';
                }
            }else {
                $msg += 'Vendedor não inserido.<br />';
            }
        }elseif ($checkBtn == 0){
            $vendedor->setNNif(htmlentities(addslashes(filter_input(INPUT_POST,'n-nif-vendedor'))));
            $vendedor->setNif(htmlentities(addslashes(filter_input(INPUT_POST,'nif-vendedor-1'))));

            $rtnVendedor = $vendedorDao->criarVendedor($vendedor);

            if ($rtnVendedor == true){
                $pessoa_fisica=new Pessoa_Fisica();
                $pessoa_fisicaDao=new Pessoa_FisicaDao();
                $this->ultimoId('pessoa_fisica',$pessoa_fisica,$pessoa_fisicaDao);

                $pessoa_fisica->setIdVendedor($vendedor->getId());
                $pessoa_fisica->setNBi(htmlentities(addslashes(filter_input(INPUT_POST,'n-bi-vendedor'))));
                $pessoa_fisica->setBi(htmlentities(addslashes(filter_input(INPUT_POST,'bi-vendedor-1'))));

                $rtnPessoa = $pessoa_fisicaDao->criarPessoaFisica($pessoa_fisica);
            }else{
                $msg += 'Vendedor não inserido.<br />';
            }
        }


        $imovel=new Imovel();
        $imovelDao=new ImovelDao();
        $this->ultimoId('imovel',$imovel,$imovelDao);

        $imovel->setNomeCondominio(htmlentities(addslashes(filter_input(INPUT_POST,'nome-condominio'))));
        $imovel->setNProcesso($imovelDao->criarNumProcesso($imovel->getNomeCondominio()));
        $imovel->setTipoImovel(htmlentities(addslashes(filter_input(INPUT_POST,'tipo-imovel'))));
        $imovel->setNDescricaoPredio(htmlentities(addslashes(filter_input(INPUT_POST,'n-descricao-predio'))));
        $imovel->setValor(htmlentities(addslashes(filter_input(INPUT_POST,'valor-imovel'))));
        $imovel->setIdCliente($ultimoCliente);
        $imovel->setIdVendedor($vendedor->getId());
        $imovel->setIdEstado(1);
        $imovel->setDataCriacao(Date('Y-m-d'));

        $rtnImovel = $imovelDao->criarImovel($imovel);

        if($rtnImovel == true) {
            $ultimoImovel = $imovelDao->ultimoElemento('imovel')->_id;
        }else {
            $msg += 'Imóvel não inserido.<br />';
        }

        $localizacao=new Localizacao();
        $localizacaoDao=new LocalizacaoDao();
        $this->ultimoId('localizacao',$localizacao,$localizacaoDao);

        $localizacao->setNCondominio(htmlentities(addslashes(filter_input(INPUT_POST,'n-condominio'))));
        $localizacao->setQuadra(htmlentities(addslashes(filter_input(INPUT_POST,'quadra'))));
        $localizacao->setLote(htmlentities(addslashes(filter_input(INPUT_POST,'lote'))));
        $localizacao->setMetragemLote(htmlentities(addslashes(filter_input(INPUT_POST,'metragem-lote'))));
        $localizacao->setTipoLote(htmlentities(addslashes(filter_input(INPUT_POST,'tipo-lote'))));
        $localizacao->setTipoHabitacao(htmlentities(addslashes(filter_input(INPUT_POST,'tipo-habitacao'))));
        $localizacao->setMetragemHabitacao(htmlentities(addslashes(filter_input(INPUT_POST,'metragem-habitacao'))));
        $localizacao->setIdImovel($ultimoImovel);

        $rtnLocalizacao = $localizacaoDao->criarLocalizacao($localizacao);
        if ($rtnLocalizacao == true) {
            $ultimaLocalizacao = $localizacaoDao->ultimoElemento('localizacao');
        }else {
            $msg += 'Localização não inserida.<br />';
        }

        if($rtnCliente==true AND $rtnVendedor==true AND ($rtnEmpresa==true OR $rtnPessoa==true) AND $rtnImovel==true AND $rtnLocalizacao==true)
            echo json_encode(1);
        else
            echo json_encode($msg);
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

    public function carregarFile()
    {
        $fileDao  = new fileUploadDao();
        $file = new fileUpload();

        $this->ultimoId('doc_gerado',$file,$fileDao);
        $file->setNome(basename($_FILES['carregar-doc-proc']['name']));
        $file->setCaminho(htmlentities(addslashes(filter_input(INPUT_POST,'caminho-pasta-fase'))));
        $tipo = htmlentities(addslashes(filter_input(INPUT_POST,'tipo-doc')));

        $file->setIdMovel(1233);

        $tmp_name = $_FILES["carregar-doc-proc"]["tmp_name"];

        $rtn = $fileDao->guardarDocumento($file,$tmp_name);
        if($rtn['rtn'] == 1) {
            var_dump($rtn);
        }else{
            var_dump($rtn);
        }
    }

    public function carregarFileDocProc()
    {
        $fileDao  = new fileUploadDao();
        $file = new fileUpload();

        $file->setNome(basename($_FILES['carregar-doc-proc']['name']));
        $file->setCaminho(htmlentities(addslashes(filter_input(INPUT_POST,'caminho-pasta-fase'))));
        $idImovel = htmlentities(addslashes(filter_input(INPUT_POST,'id-imovel')));
        $tipo = htmlentities(addslashes(filter_input(INPUT_POST,'tipo-doc-proc')));
        $idC = htmlentities(addslashes(filter_input(INPUT_POST,'idCc')));
        $estadoImovel = htmlentities(addslashes(filter_input(INPUT_POST,'estado-imovel')));
        $bitUpdate = 0;
        $estadoImovel+=1;

        if($tipo=='sisa'){
            $rtnTipo = $fileDao->listarPelaChaveEstrangeiraAND('doc_gerado','_id_imovel',$idImovel,'_tipo','certidao-matricial');
            if ($rtnTipo == false  || !is_object($rtnTipo)){
                $bitUpdate = 1;
            }else {
                $bitUpdate = 0;
            }
        }elseif ($tipo=='certidao-matricial'){
            $rtnTipo = $fileDao->listarPelaChaveEstrangeiraAND('doc_gerado','_id_imovel',$idImovel,'_tipo','sisa');
            if ($rtnTipo == false  || !is_object($rtnTipo)){
                $bitUpdate = 1;
            }else {
                $bitUpdate = 0;
            }
        }

        $url = 'Location: '.URL.'backOffice/visualizar/'.base64_encode($idC);

        $tmp_name = $_FILES["carregar-doc-proc"]["tmp_name"];

        $rtn = $fileDao->guardarDocumento($file,$tmp_name);

        if($rtn['rtn'] == 1) {

            $doc_geradoDao = new Doc_GeradoDao();
            $doc_gerado = new Doc_Gerado();

            $this->ultimoId('doc_gerado',$doc_gerado,$doc_geradoDao);
            $doc_gerado->setNome($rtn['nome']);
            $doc_gerado->setCaminho($rtn['caminho']);
            $doc_gerado->setTipo($tipo);
            $doc_gerado->setIdImovel($idImovel);

            $rtnFinal = $doc_geradoDao->criarDoc_gerado($doc_gerado);

            if($rtnFinal){
                if($bitUpdate==0) {
                    $imovelDao = new ImovelDao();
                    $imovelDao->alterarUmCampo('imovel', '_id_estado', $estadoImovel, '_id', $idImovel);
                }
                header($url);
            } else{
                $url = $url.'/?erro=0';
                header($url);
            }
        }else{
            $url = $url.'/?erro=$rtn';
            header($url);
        }
    }

    public function carregarFileDocPessoal()
    {
        $tipo = htmlentities(addslashes(filter_input(INPUT_POST,'tipo-doc')));
        $idC = htmlentities(addslashes(filter_input(INPUT_POST,'idC')));
        $caminho = htmlentities(addslashes(filter_input(INPUT_POST,'caminho-pasta')));
        $nome = basename($_FILES['carregar-doc-pessoal']['name']);
        $tmp_name = $_FILES["carregar-doc-pessoal"]["tmp_name"];

        $url = 'Location: '.URL.'backOffice/visualizar/'.base64_encode($idC);

        $fileDao  = new fileUploadDao();

        $rtn = $fileDao->carregarDoc($caminho,$nome,$tmp_name);

        if($rtn['rtn'] == 1) {

            $doc_pessoalDao = new Doc_PessoalDao();
            $doc_pessoal = new Doc_Pessoal();

            $this->ultimoId('doc_pessoal',$doc_pessoal,$doc_pessoalDao);
            $doc_pessoal->setNome($rtn['nome']);
            $doc_pessoal->setCaminho($rtn['caminho']);
            $doc_pessoal->setTipo($tipo);
            $doc_pessoal->setIdCliente($idC);

            $rtnFinal = $doc_pessoalDao->criarDocPessoal($doc_pessoal);
            if($rtnFinal){
                header($url);
            } else{
                $url = $url.'/?erro=0';
                header($url);
            }
        }else{
            $url = $url.'/?erro='.$rtn;
            header($url);
        }
    }
}