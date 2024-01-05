<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class AdminPemesananController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::all();
        return view('backend.pemesanan', compact('pemesanans'));
    }
    
    public function show($id)
    {
        $pemesanans = Pemesanan::find($id);
        if (!$pemesanans) {
            abort(404, 'Pemesanan not found');
        }
        return view('show', compact('pemesanans'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer|exists:pelanggans,id',
            'id_paket' => 'required|integer|exists:pakets,id',
            'tanggal_pemesanan' => 'required|date',
            'status_pemesanan' => 'required|string',
        ]);

        Pemesanan::create($validatedData);
        return redirect()->route('admin.pemesanans.index');
    }

    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id);
        if (!$pemesanan) {
            abort(404, 'Pemesanan not found');
        }
        return view('backend.editpemesanan', compact('pemesanan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer|exists:pelanggans,id',
            'id_paket' => 'required|integer|exists:pakets,id',
            'tanggal_pemesanan' => 'required|date',
            'status_pemesanan' => 'required|string',
            'kadaluarsa_paket' => 'required|date', // Tambahkan validasi untuk kadaluarsa_paket jika dibutuhkan
        ]);

        $pemesanan = Pemesanan::find($id);
        if (!$pemesanan) {
            abort(404, 'Pemesanan not found');
        }

        $pemesanan->fill($validatedData);
        $pemesanan->save();

        return redirect()->route('admin.pemesanans.index');
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        if (!$pemesanan) {
            abort(404, 'Pemesanan not found');
        }

        $pemesanan->delete();
        return redirect()->route('admin.pemesanans');
    }
}
