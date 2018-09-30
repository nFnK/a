<?php
error_reporting(1);
//set_time_limit(500);
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Istanbul');
require 'vendor/autoload.php';
use Umi\hash;

define('URL', '');
define('AMQP_DEBUG', false);

$router = new \Umi\Router();
$router->get('/rabbit', 'Umi\Controllers\rabbit@rabbit');
$router->get('/rabbit/2', 'Umi\Controllers\rabbit@rabbit_second');
$router->get('/rabbit/send', 'Umi\Controllers\rabbit@rabbit_send');
$router->get('/rabbit/process', 'Umi\Controllers\rabbit@rabbit_process');
$router->get('/rabbit/senddelayed', 'Umi\Controllers\rabbit@rabbit_sendDelayed');

$router->get('/rabbit/local/send', 'Umi\Controllers\rabbit@rabbit_local_send');


$router->get('/deneme', function () {
echo "deneme";
});

$router->run();
