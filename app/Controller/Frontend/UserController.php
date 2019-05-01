<?php

namespace App\Controller\Frontend;

use App\Models\User;
use Respect\Validation\Validator;

class UserController
{
    public function getProfile(){
        view('profile');
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
        $validator = new Validator();

        $errors = [];

        $profile_photo = $_FILES['profile_photo'];

        if ($validator::image()->validate($profile_photo['name'])) {
            $errors['profile_photo'] = 'Profile photo must be an image file';
        }

        if (empty($errors)){
            $file_name = 'profile_photo_'.time();
            $extension = explode('.', $profile_photo['name']);
            $ext = end($extension);
            move_uploaded_file($profile_photo['tmp_name'], 'media/profile_photo/'.$file_name.'.'.$ext);


            User::create([
                'full_name' => $_POST['full_name'],
                'address' => $_POST['address'],
                'mobile_number' => $_POST['mobile_number'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'],PASSWORD_BCRYPT),
                'profile_photo' => $file_name.'.'.$ext
            ]);
        }

        User::create([
           'full_name' => $_POST['full_name'],
            'address' => $_POST['address'],
            'mobile_number' => $_POST['mobile_number'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'],PASSWORD_BCRYPT)
        ]);
    }
}