<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        $cre = $request->only('username','password');
        if (Auth::attempt($cre)) {
            return redirect('dashboard');
        }
        return redirect()->back()->with('sukses','Username atau Password Salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
