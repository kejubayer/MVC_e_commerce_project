<?php

namespace App\Controller\Backend;


class DashboardController
{
    public function getIndex(){
        viewdb('dashboard');
    }

    public function showAddProduct(){
        viewdb('add_product');
    }


}