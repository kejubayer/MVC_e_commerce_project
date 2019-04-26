<?php

namespace App\Controller\Frontend;

use App\Models\User;

class UserController
{
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
        User::create([
           'full_name' => $_POST['full_name'],
            'address' => $_POST['address'],
            'mobile_number' => $_POST['mobile_number'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'],PASSWORD_BCRYPT)
        ]);
    }
}