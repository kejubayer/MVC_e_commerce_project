<?php

////$router->get('/',[\App\Controller\HomeController::class,'showHome']);
//$router->get('/',function (){
//    echo "root";
//});


use App\Controller\Frontend\HomeController;
use App\Controller\Frontend\UserController;

$router->controller('/',HomeController::class);
$router->controller('/',UserController::class);