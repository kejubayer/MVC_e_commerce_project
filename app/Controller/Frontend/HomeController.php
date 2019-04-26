<?php


namespace App\Controller\Frontend;
use App\Models\User;

class HomeController
{
    public  function getIndex(){
        view('home');
    }



}