<?php

function view ($file = 'index'){

    require_once __DIR__.'/../views/frontend/'.$file.'.php';
}

function viewdb($file = 'index'){

    require_once __DIR__.'/../views/backend/'.$file.'.php';
}



function dd($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}