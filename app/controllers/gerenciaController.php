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
            $this->view->render(SCT,'visualizar');
    }

    public function perfil($t)
    {
        // $parametro = base64_decode($t);
        if (isset($this->view))
            $this->view->render(SCT, 'perfil');
    }
}