<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 01/01/17
 * Time: 06:18
 */
class ContaController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function editar()
    {
        $opcoes=array('conta',array('_estado=?'),array('_id_utilizador=?'),array($_POST['status'],$_POST['id_utilizador']));
        if($this->model->alterar($opcoes[0],$opcoes[1],$opcoes[2],$opcoes[3]))
            echo 1;
        else
            echo 0;
    }
}