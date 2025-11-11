<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login_test()
    {
        return view('auth.login');
    }

    public function register_test()
    {
        return view('auth.register');
    }
}
