<?php


namespace App\Controller;
use App\Models\User;

class HomeController
{
    public  function getIndex(){
        view('home');
    }

    public function getLogin(){
        view('login');
    }

    public function postLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = User::where('email', $email)->first();
        if ($user){
            if (password_verify($password, $user->password)=== true){
                echo 'Logged In';
            } else{
                echo 'Invalid Password';
            }
        }else{
            echo 'User Not Found';
        }
    }
    public function getRegister(){
        view('register');
    }

    public function postRegister(){

    }

}