<?php

/**
 * Created by PhpStorm.
 * User: Joao Pereira
 * Date: 15/10/17
 * Time: 15:16
 */
class BackOfficeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->view->render(BCK,1);
    }

    public function novo($t)
    {
        $parametro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(BCK,$parametro.'/criar');
    }

    public function listarTodos($t)
    {
        $parametro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(BCK,'listar/'.$parametro);
    }

    public function listar()
    {
        if(isset($this->view))
            $this->view->render(BCK,'listarTodos');
    }

    public function visualizar()
    {
        if(isset($this->view))
            $this->view->render(BCK,'visualizar');
    }

    public function perfil()
    {
        if(isset($this->view))
            $this->view->render(BCK,'perfil');
    }

    public function alterarCredenciais()
    {
        if(isset($this->view))
            $this->view->render(BCK,'perfil');
    }

    public function carregarFotoPerfil()
    {
        $idUser = htmlentities(addslashes(filter_input(INPUT_POST,'idUser')));
        $nome = basename($_FILES['carregar-imagem']['name']);
        $caminho = htmlentities(addslashes(filter_input(INPUT_POST,'caminho-imagem')));

        $tmp_name = $_FILES["carregar-imagem"]["tmp_name"];

        $rtn = $this->carregarFoto($idUser,$caminho,$nome,$tmp_name);
        $url = 'Location: '.URL.'backOffice/perfil/'.base64_encode($idUser);

        header($url);
    }
}