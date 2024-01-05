<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Hash;

class PelangganAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('sesi.loginpage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email_pl' => 'required|email',
            'password_pl' => 'required',
        ]);

        $credentials = $request->only('email_pl', 'password_pl');

        if (Auth::guard('pelanggan')->attempt($credentials)) {
            return redirect()->intended('/dashboard'); // Redirect to intended page after login
        }

        return redirect()->route('login')->with('error', 'Login failed. Invalid credentials.');
    }

    public function logout(Request $request)
    {
        Auth::guard('pelanggan')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function showRegisterForm()
    {
        return view('sesi.registerpage');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat_pl' => 'required',
            'tlp_pl' => 'required',
            'email_pl' => 'required|email|unique:pelanggans,email_pl',
            'password_pl' => 'required|min:6',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $data = $request->all();
        $data['password_pl'] = Hash::make($request->password_pl);

        Pelanggan::create($data);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}

