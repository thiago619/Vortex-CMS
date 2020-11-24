<?php


/**Configurações de Banco de dados, altere **/

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','12345678');
define('DB_NAME','vortex');

/** Não altere nada abaixo **/

define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
define('INCLUDE_PATH',BASE_PATH .'/include');
define('TEMPLATE_PATH',INCLUDE_PATH .'/templates');
define('CLASS_PATH',INCLUDE_PATH .'/class');
define('ADMIN_PATH',BASE_PATH .'/admin');
define('PROTOCOL','http://');
define('BASE_URL',PROTOCOL .'localhost');
define('ADMIN_URL',BASE_URL .'/admin');


define('PAGE_TYPE_FILE',0);
define('PAGE_TYPE_APP',1);
define('PAGE_TYPE_NOTFOUND',2);


/** Includes **/
require_once CLASS_PATH .'/SqlManager.php';
require_once CLASS_PATH .'/Users.php';
require_once CLASS_PATH .'/CurrentPageManager.php';
require_once CLASS_PATH .'/PageManager.php';


