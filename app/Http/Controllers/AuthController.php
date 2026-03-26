<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    // login
    public function login()
    {
        return view('login');
    }

    // proses login
    public function prosesLogin(Request $request)
    {
        $username = $request->username;

        return redirect('/dashboard')->with('username', $username);
    }

    // halaman dashboard
    public function dashboard()
    {
        return view('dashboard');
    }

}