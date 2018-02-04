<?php

/**
 * Created by PhpStorm.
 * User: Sony
 * Date: 28-jan-2018
 * Time: 09:55
 */
class ImovelDao extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function criarImovel(Imovel $imovel)
    {
        if($this->insert($imovel->parametro()))
            return true;
        else
            return false;
    }

    public function criarNumProcesso($condominio)
    {
        $letra = '';
        $divisao = explode(" ",$condominio);
        if(count($divisao) > 1){
            for ($i=0; $i<count($divisao); $i++){
                $letra .= substr($divisao[$i], 0,1);
            }
            $letra = strtoupper($letra);
        } else{
            $letra .= substr($condominio, 0,1);
            $letra .= substr($condominio, -1);
            $letra = strtoupper($letra);
        }
        $rtnletra = '%'.$letra.'%';
        $rtn = $this->ultimoNumProcesso($rtnletra)->fetchAll();

        $letra .= '0';
        $letra .= count($rtn) + 1;

        return $letra;
    }
}