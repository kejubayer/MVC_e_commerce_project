<?php

////$router->get('/',[\App\Controller\HomeController::class,'showHome']);
//$router->get('/',function (){
//    echo "root";
//});


$router->controller('/',\App\Controller\HomeController::class);