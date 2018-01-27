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

}
