<?php


namespace App\Controller\Frontend;

class HomeController
{
    public  function getIndex(){
        view('home');
    }

    public function getProduct(){
        view('product');
    }



}