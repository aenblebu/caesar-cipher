<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function prosesLogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session([
                'login' => true,
                'email' => $user->email,
                'user_id' => $user->id
            ]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function dashboard() {
        return session('login') ? view('dashboard') : redirect('/login');
    }

    public function logout() {
        session()->flush();
        return redirect('/login');
    }
}