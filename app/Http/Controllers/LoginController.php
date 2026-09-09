<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->filled('username') && $request->filled('email') && $request->filled('password')) {
            $request->session()->put('level', $request->level);

            if ($request->level == 'admin') {
                return redirect('/homeadmin');
            } elseif ($request->level == 'student') {
                return redirect('/homestudent');
            }
        }

        return redirect('/')->with('error', 'Access denied. All fields must be filled.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('level');
        return redirect('/');
    }
}