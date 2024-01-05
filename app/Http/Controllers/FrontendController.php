<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function showLoginForm()
    {
        return view('sesi.loginpage');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email_pl' => 'required|email',
            'password_pl' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->route('frontend.home');
        }

        // Authentication failed
        return redirect()->route('loginaja')->with('error', 'Email atau password salah');
    }

    public function showRegisterForm()
    {
        return view('sesi.registerpage');
    }

    public function register(Request $request)
    {
        // Implement registration logic here

        // For illustration purposes, redirecting to login after registration
        return redirect()->route('loginaja')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginaja');
    }
}

