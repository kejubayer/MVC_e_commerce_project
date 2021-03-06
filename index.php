<?php


use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;
use Illuminate\Database\Capsule\Manager as Capsule;


session_start();

require_once 'vendor/autoload.php';
$capsule = new Capsule();
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'ppi',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();




$router = new RouteCollector(new RouteParser());

    include_once __DIR__.'/routes.php';

$dispatcher = new Dispatcher($router->getData());
try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (Exception $exception){
    echo $exception->getMessage();
}