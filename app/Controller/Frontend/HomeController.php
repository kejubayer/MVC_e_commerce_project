<?php


namespace App\Controller\Frontend;

use App\Models\Product;
use App\Models\User;

class HomeController
{
    public  function getIndex(){
        $products = Product::all();
        $users = User::all();

        view('home', ['products' => $products,'users'=>$users]);
    }

    public function getProduct(){
        view('product');
    }

    public function getCart(){
        view('cart');
    }



}