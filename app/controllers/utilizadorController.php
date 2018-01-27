<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 20/12/16
 * Time: 12:26
 */
class UtilizadorController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registoBackEnd()
    {
        $opcao=array(
            new ContaDao(),
            new Conta(),
            new MoradaDao(),
            new Morada()
        );
        $this->entity->set_nome(htmlentities(addslashes(filter_input(INPUT_POST,'nomecompleto'))));
        $this->entity->set_dataNascimento($this->entity->retornaData(htmlentities(addslashes(filter_input(INPUT_POST,'datanascimento')))));
        $this->entity->set_telefone(htmlentities(addslashes(filter_input(INPUT_POST,'telefone'))));
        $this->entity->set_idfuncao(htmlentities(addslashes(filter_input(INPUT_POST,'funcao'))));
        $this->entity->set_email(htmlentities(addslashes(filter_input(INPUT_POST,'email'))));
        $this->entity->set_numBI(htmlentities(addslashes(filter_input(INPUT_POST,'numbi'))));
        $this->entity->set_genero(htmlentities(addslashes(filter_input(INPUT_POST,'genero'))));
        $this->entity->set_nivelEscolar(htmlentities(addslashes(filter_input(INPUT_POST,'nivel_escolar'))));


        //setando os dados da morada do utente
        $opcao[3]->set_id_provincia(htmlentities(addslashes(filter_input(INPUT_POST,'_id_provincia'))));
        $opcao[3]->set_id_municipio(htmlentities(addslashes(filter_input(INPUT_POST,'_id_municipio'))));
        $opcao[3]->set_id_comuna(htmlentities(addslashes(filter_input(INPUT_POST,'_id_comuna'))));
        $opcao[3]->set_id_bairro(htmlentities(addslashes(filter_input(INPUT_POST,'_id_bairro'))));
        $opcao[3]->set_id_rua(htmlentities(addslashes(filter_input(INPUT_POST,'_id_rua'))));

        $_id_morada=$opcao[2]->registar($opcao[3]);//persistindo os dados na tabela morada
        $this->entity->set_morada($_id_morada);//setando o id da morada

        $id=$this->model->registar($this->entity);
        if($id>0) {
            $opcao[1]->setEstado(0);
            $opcao[1]->setIdUtilizador($id);
            $opcao[1]->setSenha(htmlentities(addslashes(Hash::create('md5',(filter_input(INPUT_POST,'senha')),HASH_PASSWORD_KEY))));
            $opcao[1]->setTelefone(htmlentities(addslashes(filter_input(INPUT_POST,'telefone'))));
            $opcao[1]->setUtilizador(htmlentities(addslashes(filter_input(INPUT_POST,'username'))));
            $opcao[0]->criarConta($opcao[1]);
        }else{
            echo 0;
        }
    }

    public function registoFrontEnd()
    {
        $opcao=array(
            new Conta(),//0
            new ContaDao(),//1
            new Tecnico(),//2
            new TecnicoDao(),//3
            new DMGUUC(),//4
            new DMGUUCDao(),//5
            new CRGUUC(),//6
            new CRGUUCDao(),//7
            new CGA(),//8
            new CGADao(),//9
            new SecretariaGeral(),//10
            new SecretariaGeralDao(),//11
            new Administrador(),//12
            new AdministradorDao(),//13
            new SDMGUUC(),//14
            new SDMGUUCDao(),//15
            new CROP(),//16
            new CROPDao()//17
        );
        $this->entity->set_nome(htmlentities(addslashes(filter_input(INPUT_POST,'nomecompleto'))));
        $this->entity->set_dataNascimento($this->entity->retornaData(htmlentities(addslashes(filter_input(INPUT_POST,'datanascimento')))));
        $this->entity->set_telefone(htmlentities(addslashes(filter_input(INPUT_POST,'telefone'))));
        $this->entity->set_idfuncao(htmlentities(addslashes(filter_input(INPUT_POST,'funcao'))));
        $this->entity->set_email(null);
        $this->entity->set_numBI(null);
        $this->entity->set_morada(null);
        $this->entity->set_genero(null);
        $this->entity->set_nivelEscolar(null);

        $id=$this->model->registar($this->entity);

        $id_funcao=$this->entity->get_idfuncao();
        $func=$opcao[1]->listarPorId('funcao',$id_funcao)->fetchObject();
        switch ($func->_codigo)
        {
            case 'AM':
                $opcao[12]->setIdUtilizador($id);
                $opcao[13]->registar1($opcao[12]);
                break;
            case 'TEC':
                $opcao[2]->setIdUtilizador($id);
                $opcao[2]->setTipo($_POST['tipo_tec']);
                $opcao[3]->registar1($opcao[2]);
                break;
            case 'CGA':
                $opcao[8]->setIdUtilizador($id);
                $opcao[9]->registar1($opcao[8]);
                break;
            case 'SGA':
                $opcao[10]->setIdUtilizador($id);
                $opcao[11]->registar1($opcao[10]);
                break;
            case 'CROP':
                $opcao[16]->setIdUtilizador($id);
                $opcao[17]->registar1($opcao[16]);
                break;
            case 'CRGUUC':
                $opcao[6]->setIdUtilizador($id);
                $opcao[7]->registar1($opcao[6]);
                break;
            case 'DMGUUC':
                $opcao[4]->setIdUtilizador($id);
                $opcao[5]->registar1($opcao[4]);
                break;
            case 'SDMGUUC':
                $opcao[14]->setIdUtilizador($id);
                $opcao[15]->registar1($opcao[14]);
                break;

        }
        if($id>0) {
            $opcao[0]->setEstado(0);
            $opcao[0]->setIdUtilizador($id);
            $opcao[0]->setSenha(htmlentities(addslashes(Hash::create('md5',(filter_input(INPUT_POST,'senha')),HASH_PASSWORD_KEY))));
            $opcao[0]->setTelefone(htmlentities(addslashes(filter_input(INPUT_POST,'telefone'))));
            $opcao[0]->setUtilizador(htmlentities(addslashes(filter_input(INPUT_POST,'username'))));
            $opcao[1]->criarConta($opcao[0]);
        }else{
            echo 0;
        }
    }


}