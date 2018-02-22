<?php
/**
 * Created by PhpStorm.
 * User: Joao Fontes Pereira
 * Date: 13/09/16
 * Time: 10:35
 */

//Definicao de constantes para o base de dados
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','sicdoc');
define('DB_USER','root');
define('DB_PASS','');


//Para outras hash keys

define('HASH_GENERAL_KEY','luanda_moxico@!MohabuitA19921996@!11/07/2015!??&&^##@');

//Isto eh apenas para as passwords na base de dados
define('HASH_PASSWORD_KEY','MohabuitA19921996@!11/07/2015!??&&^##@');

define('URL',DIRECTORY_SEPARATOR.'sicdoc'.DIRECTORY_SEPARATOR);
define('SICDOC',DIRECTORY_SEPARATOR.'index');
define('DIR_VIEWS','views');
define('GEN_HEADER',DIRECTORY_SEPARATOR.'geral'.DIRECTORY_SEPARATOR.'header.php');
define('GEN_FOOTER',DIRECTORY_SEPARATOR.'geral'.DIRECTORY_SEPARATOR.'footer.php');
define('EXTENSION','.php');
define('GEN_INDEX',DIRECTORY_SEPARATOR.'geral'.SICDOC);
define('MENU',DIRECTORY_SEPARATOR.'menu'.SICDOC);
define('BCK','backOffice/geral/');
define('GRC','gerencia/geral/');
define('LOGIN_VIEW','login'.SICDOC);
define('TEC','tecnico/geral/');
define('DAO','models'.DIRECTORY_SEPARATOR.'dao'.DIRECTORY_SEPARATOR);
define('ENTITY','models'.DIRECTORY_SEPARATOR.'entity'.DIRECTORY_SEPARATOR);



//credencias
define('USER','0ll1P3r31r@');
define('PASS','d86db5bbd36fa2c2d7182d134ec694eb');


