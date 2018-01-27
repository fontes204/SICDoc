<?php

ini_set('display_errors',1);//activa ou desactiva sms de erro
error_reporting(E_ALL);

require 'system/config.php';
require 'system/util/Auth.php';

//requerendos as itefaces
/*
require 'models/interface/iUtilizador.php';
require 'models/interface/iVertice.php';
require 'models/interface/iUtente.php';
require 'models/interface/iTerreno.php';
require 'models/interface/iProcesso.php';
require 'models/interface/iPagamento.php';
require 'models/interface/iMorada.php';
require 'models/interface/iLocalizacao.php';
require 'models/interface/iFuncao.php';
require 'models/interface/iFicha.php';
require 'models/interface/iDepartamento.php';
require 'models/interface/iOnyxCoreDB.php';
*/

function __autoload($st_file)
{
    if(file_exists('system/libs/'.$st_file.'.php'))
    {
        require_once 'system/libs/'.$st_file.'.php';
    }elseif (file_exists('app/models/entity/'.$st_file.'.php'))
    {
        require 'app/models/entity/'.$st_file.'.php';
    }elseif (file_exists('app/models/dao/'.$st_file.'.php'))
    {
        require 'app/models/dao/'.$st_file.'.php';
    }
}
$app= new App();