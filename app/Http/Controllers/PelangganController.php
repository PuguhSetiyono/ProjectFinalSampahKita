<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    public function create()
    {
        return view('frontend.registerpage'); // Tampilan formulir pendaftaran pelanggan
    }

    public function store(Request $request)
    {
        // Mendapatkan ID pengguna yang terautentikasi
        $userId = Auth::id();
    
        // Validasi data input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat_pl' => 'required|string|max:255',
            'tlp_pl' => 'required|string|max:15',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);
    
        // Tambahkan 'id_users' ke dalam data yang akan disimpan
        $validatedData['id_users'] = $userId;
    
        // Simpan data pelanggan ke dalam database
        Pelanggan::create($validatedData);
    
        // Redirect ke halaman selamat datang atau halaman dashboard pelanggan
        return redirect('/'); // Ubah dengan URL yang sesuai
    }
    
}
