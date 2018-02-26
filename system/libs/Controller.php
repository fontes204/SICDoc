<?php

class Controller extends App {

    function __construct() {
        $this->view = new View();
    }

    public function loadModel($name) {
        $path_dao = 'app/models/dao/' . $name . 'Dao.php';
        $path_entity = 'app/models/entity/' . $name . '.php';
        $path_controller='app/controllers/'.$name.'Controller';
        if (file_exists($path_dao)) {
            require $path_dao;
            $modelName = $name.'Dao';
            $this->model = new $modelName();
        }


        if (file_exists($path_entity)) {
            require $path_entity;
            $this->entity = new $name();
        }

        if (file_exists($path_controller)) {
            require $path_controller;
            $controllername = $name.'Controller';
            $this->controller = new $controllername();
        }
    }

    public function carregarFoto($idUser,$caminho,$nome,$tmp_name)
    {
        $fileDao  = new fileUploadDao();
        $file = new fileUpload();

        $file->setId($idUser);
        $file->setCaminho($caminho);
        $file->setNome($nome);

        $rtn = $fileDao->guardarDocumento($file,$tmp_name);

        if($rtn['rtn'] == 1) {
            $fileDao->alterarUmCampo('funcionario','_foto',$nome,'_id',$idUser);
            return $rtn;
        }else{
            return ;//$rtn;
        }
    }
}
