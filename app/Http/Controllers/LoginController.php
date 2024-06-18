<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            return redirect()->intended('/');
        }
 
        return redirect('/login')->withErrors([
            'email' => 'Invalid credentials.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Melakukan logout user
        $request->session()->invalidate(); // Menghapus session yang ada
        $request->session()->regenerateToken(); // Me-regenerate token CSRF untuk keamanan

        return redirect('/login'); // Redirect ke halaman login atau halaman lain yang Anda tentukan
    }
}
