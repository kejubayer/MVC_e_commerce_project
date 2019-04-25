<?php

$router->get('/home',[\App\Controller\HomeController::class,'showHome']);
$router->get('/test',[\App\Controller\HomeController::class,'showTest']);