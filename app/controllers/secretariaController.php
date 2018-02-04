<?php

/**
 * Created by PhpStorm.
 * User: Joao Pereira
 * Date: 15/10/17
 * Time: 15:16
 */
class SecretariaController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->view->render(SCT,1);
    }

    public function novo($t)
    {
        $parametro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(SCT,$parametro.'/criar');
    }

    public function listarTodos($t)
    {
        $parametro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(SCT,'listar/'.$parametro);
    }

    public function visualizar($t)
    {
       // $parametro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(SCT,'visualizar');
    }

    public function perfil($t)
    {
       // $parametro = base64_decode($t);
        if(isset($this->view))
            $this->view->render(SCT,'perfil');
    }
}