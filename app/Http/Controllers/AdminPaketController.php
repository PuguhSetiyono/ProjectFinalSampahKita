<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Paket;
use App\Models\Jadwal;

class AdminPaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        $jadwals = Jadwal::all();
        return view('backend.paket', compact('pakets', 'jadwals'));
    }

    public function create()
    {
        // Logic for creating a package page (if needed)
    }

    public function store(Request $request)
    {
        // Validating input data from the request
        $request->validate([
            'id_armada' => 'required|exists:armadas,id',
            'id_jadwal' => 'required|exists:jadwals,id',
            'nama_paket' => 'required|string',
            'harga_paket' => 'required|numeric',
        ]);

        // Adding 30 days to the current time to get the expiration date
        $kadaluarsa_paket = Carbon::now()->addDays(30);

        // Storing data into the database
        $paket = Paket::create([
            'id_armada' => $request->id_armada,
            'id_jadwal' => $request->id_jadwal,
            'nama_paket' => $request->nama_paket,
            'harga_paket' => $request->harga_paket,
            'kadaluarsa_paket' => $kadaluarsa_paket,
        ]);

        // Redirecting to the desired page with a success message
        return redirect()->route('admin.paket')
            ->with('success', 'Paket berhasil ditambahkan');
    }

    public function edit($id)
    {
        $paket = Paket::find($id);
        $jadwals = Jadwal::all();

        if (!$paket) {
            return redirect()->route('admin.paket')
                ->with('error', 'Paket tidak ditemukan');
        }
        return view('backend.editpaket', compact('paket', 'jadwals'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_jadwal' => 'required|exists:jadwals,id',
            'nama_paket' => 'required|string',
            'harga_paket' => 'required|numeric',
            'armada' => 'required|string',
            'kapasitas_armada' => 'required|numeric',
            'gambar' => 'required|string',
            'durasi_paket' => 'required|numeric',
        ]);
    
        $paket = Paket::find($id);
        if (!$paket) {
            return redirect()->route('admin.paket')->with('error', 'Paket tidak ditemukan');
        }
    
        // Update data paket dengan data yang divalidasi
        $paket->id_jadwal = $validatedData['id_jadwal'];
        $paket->nama_paket = $validatedData['nama_paket'];
        $paket->harga_paket = $validatedData['harga_paket'];
        $paket->armada = $validatedData['armada'];
        $paket->kapasitas_armada = $validatedData['kapasitas_armada'];
        $paket->gambar = $validatedData['gambar'];
        $paket->durasi_paket = $validatedData['durasi_paket'];
    
        // Pastikan untuk menyimpan perubahan ke database
        $paket->save();
    
        return redirect()->route('admin.paket')->with('success', 'Paket berhasil diperbarui');
    }
    
    

    public function destroy($id)
    {
        $paket = Paket::find($id);
        if (!$paket) {
            abort(404, 'Pemesanan not found');
        }

        $paket->delete();
        return redirect()->route('admin.paket');
    }
}
