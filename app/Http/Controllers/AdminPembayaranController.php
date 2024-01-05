<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\MetodePembayaran;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class AdminPembayaranController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::with('pelanggan', 'paket')->get();

        // Retrieve data from MetodePembayaran model
        $metodePembayarans = MetodePembayaran::all();
    
        return view('your.view', compact('pemesanans', 'metodePembayarans'));
    }

    public function create()
    {
        $pemesanans = Pemesanan::all();
        $metodePembayarans = MetodePembayaran::all();
        return view('admin.pembayaran.create', compact('pemesanans', 'metodePembayarans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pemesanan' => 'required|exists:pemesanans,id',
            'id_metode_pembayaran' => 'required|exists:metode_pembayarans,id',
            'status_pembayaran' => 'required',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('admin.pembayaran.index')->with('success', 'Pembayaran created successfully');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pemesanans = Pemesanan::all();
        $metodePembayarans = MetodePembayaran::all();

        return view('admin.pembayaran.edit', compact('pembayaran', 'pemesanans', 'metodePembayarans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pemesanan' => 'required|exists:pemesanans,id',
            'id_metode_pembayaran' => 'required|exists:metode_pembayarans,id',
            'status_pembayaran' => 'required',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->all());

        return redirect()->route('admin.pembayaran.index')->with('success', 'Pembayaran updated successfully');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();

        return redirect()->route('admin.pembayaran.index')->with('success', 'Pembayaran deleted successfully');
    }
}

