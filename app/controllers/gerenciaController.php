<?php

/**
 * Created by PhpStorm.
 * User: Joao Pereira
 * Date: 15/10/17
 * Time: 15:16
 */
class GerenciaController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->view->render(GRC,1);
    }

    public function listarTodos($t)
    {
        $paramentro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(GRC,'listar/'.$paramentro);
    }

    public function listar()
    {
        if(isset($this->view))
            $this->view->render(GRC,'listarTodos');
    }

    public function filtrar($t)
    {
        $paramentro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(GRC,$paramentro.'/filtrar');
    }

    public function novo($t)
    {
        $paramentro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(GRC,$paramentro.'/criar');
    }

    public function visualizar($t)
    {
       // $parametro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(GRC,'visualizar');
    }

    public function perfil()
    {
        if(isset($this->view))
            $this->view->render(GRC,'meu_perfil');
    }

    public function perfil_()
    {
        if(isset($this->view))
            $this->view->render(GRC,'perfil');
    }

    public function alterarCredenciais()
    {
        if(isset($this->view))
            $this->view->render(GRC,'perfil');
    }

    public function carregarFotoPerfil()
    {
        $idUser = htmlentities(addslashes(filter_input(INPUT_POST,'idUser')));
        $nome = basename($_FILES['carregar-imagem']['name']);
        $caminho = htmlentities(addslashes(filter_input(INPUT_POST,'caminho-imagem')));

        $tmp_name = $_FILES["carregar-imagem"]["tmp_name"];

        $rtn = $this->carregarFoto($idUser,$caminho,$nome,$tmp_name);
        $url = 'Location: '.URL.'gerencia/perfil/'.base64_encode($idUser);

        header($url);
    }
}