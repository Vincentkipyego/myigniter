<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('Auth/login');
    }

    public function register()
    {
        echo 'register page';
    }
}
