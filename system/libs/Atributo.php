<?php

/**
 * Created by PhpStorm.
 * User: Joao Fontes Pereira
 * Date: 26/12/16
 * Time: 11:53
 */
class Atributo
{

    public function pegarAtributos()
    {
        $array = array();

        foreach ($this as $key => $value) {
            if (property_exists($this, $key)) {

                $array[] = $key;
            }
        }
        return $array;

    }

    public function pegarValores()
    {
        $array = array();

        foreach ($this as $key => $value) {
            if (property_exists($this, $key)) {

                $array[] = $value;
            }
        }
        return $array;
    }

    public function pegarAtributos1()
    {
        $array = array();

        foreach ($this as $key => $value) {
            if (property_exists($this, $key)) {
                if ($key=='_id_utilizador'||$key=='_tipo')
                    $array[] = $key;
            }
        }
        return $array;

    }

    public function pegarValores1()
    {
        $array = array();

        foreach ($this as $key => $value) {
            if (property_exists($this, $key)) {
                if ($key=='_id_utilizador'||$key=='_tipo')
                    $array[] = $value;
            }
        }
        return $array;
    }

    public function pegarClasse()
    {
        return get_class($this);
    }


    public function parametroFilho()
    {
        return array($this->pegarClasse(),$this->pegarAtributos1(),$this->pegarValores1());
    }
    public function parametro()
    {
        return array($this->pegarClasse(),$this->pegarAtributos(),$this->pegarValores());
    }

    public function retornaData($param)
    {
        $data=explode("/",$param);
        return $data[2]."-".$data[0]."-".$data[1];
    }

    public function DataAo($param)
    {
        $data=explode("-",$param);
        return $data[2]."-".$data[1]."-".$data[0];
    }

    public function getParam() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode("/", $url);
        if (isset($url[2])) {
            /* @var $url String */
            $param = $url[2];
        } else {
            $param = null;
        }
        return $param;
    }

    public function getContoller() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode("/", $url);
        if (isset($url[0])) {
            /* @var $url String */
            $param = $url[0];
        } else {
            $param = null;
        }
        return $param;
    }

    public function idade($param)
    {
        $data=explode("-",$param);
        $ano=(int)$data[0];
        $anoActual=(int)date('Y');
        return $anoActual-$ano;
    }
}