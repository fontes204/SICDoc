<?php
/**
 * Created by PhpStorm.
 * User: Joao Pereira
 * Date: 16/10/2017
 * Time: 10:58
 */

class RecuperarSenhaController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->view->render('recuperar_senha',1);
    }
}