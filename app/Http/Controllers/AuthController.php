<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration()
    {
        return view('registration');
    }

    public function login()
    {
        return view('login');
    }
}
