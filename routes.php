<?php

////$router->get('/',[\App\Controller\HomeController::class,'showHome']);
//$router->get('/',function (){
//    echo "root";
//});


use App\Controller\Backend\DashboardController;
use App\Controller\Frontend\HomeController;
use App\Controller\Frontend\UserController;
use Phroute\Phroute\RouteCollector;

$router->controller('/',HomeController::class);
$router->controller('/',UserController::class);

$router->controller('/dashboard',DashboardController::class);
$router->get('/dashboard/add_product',[DashboardController::class,'showAddProduct']);

/*$router->group(['prefix' => 'dashboard'], function (RouteCollector $router) {
    $router->controller('/', DashboardController::class);
});*/