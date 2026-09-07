<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login()
    {
        return redirect('/home');
    }
}