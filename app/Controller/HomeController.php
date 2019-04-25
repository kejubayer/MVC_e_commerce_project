<?php


namespace App\Controller;


use App\Models\User;

class HomeController
{
    public  function showHome(){
        $users = User::all();
        $data['users']=$users;
        view('home',$data);
    }
    public  function showTest(){
        view('test');
    }
}