<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 30/12/16
 * Time: 14:01
 */
class SysAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
//        Auth::handlelogin();
    }

    public function Index()
    {
        $this->view->render(SYS,1);
    }

    public function registarUtilizador()
    {
        $this->view->render(SYS,'utilizador/registar');
    }

    public function visualizarUtilizador()
    {
        $this->view->render(SYS,'utilizador/visualizar');
    }

    public function maisInfo()
    {
        $this->view->render(SYS,'utilizador/perfil');
    }

    public function perfil()
    {
        $this->view->render(SYS,'meu_perfil');
    }

    public function adicionarDepartamento()
    {
        $this->view->render(SYS,'adicionar_funcionalidade/departamento');
    }

    public function adicionarFuncao()
    {
        $this->view->render(SYS,'adicionar_funcionalidade/funcao');
    }

}