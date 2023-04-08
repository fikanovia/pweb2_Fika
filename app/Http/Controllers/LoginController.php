<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return view('/dashboard');
        }
        return redirect('/login')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
