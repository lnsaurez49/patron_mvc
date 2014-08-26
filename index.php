<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__))  .DS );
define('APP_PAHT', ROOT . 'APLICATION' . DS);

require_once APP_PAHT . 'config.php';
require_once APP_PAHT . 'request.php';
require_once APP_PAHT . 'bootstrap.php';
require_once APP_PAHT . 'controller.php';
require_once APP_PAHT . 'model.php';
require_once APP_PAHT . 'view.php';
require_once APP_PAHT . 'registro.php';

$r = new request();

echo $r->getcontrolador().'<br>';
echo $r->getmetodo().'<pre>';
print_r($r->getargs());

?>