<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Pelanggan;
use Carbon\Carbon;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function pemesanan()
    {
        return view('frontend.pemesanan');
    }

    public function layanan()
    {
        return view('frontend.layanan');
    }

    public function jadwal()
    {
        // Ambil ID Pelanggan yang sesuai dengan Auth::user()->id
        $status = true;
        $pelangganId = Pelanggan::where('id_users', Auth::user()->id)->value('id');
        $pemesanans = Pelanggan::where('id_users', Auth::user()->id)->first()->pemesanans;

    
        // Jika pelanggan tidak ditemukan, return dengan data kosong
        if (!$pelangganId) {
            $datesByPemesanan = [];
            $status = false;
            return view('frontend.jadwal', compact('datesByPemesanan', 'status'));
        }
    
        // Ambil data pemesanans sesuai dengan ID Pelanggan
        $pemesanans = Pemesanan::where('id_pelanggan', $pelangganId)->get();
    
        // Periksa apakah ada pemesanan atau tidak
        if ($pemesanans->isEmpty()) {
            $datesByPemesanan = [];
            $status = false;
            return view('frontend.jadwal', compact('datesByPemesanan', 'status'));
        }
    
        $datesByPemesanan = [];
    
        foreach ($pemesanans as $pemesanan) {
            $tglAwal = $pemesanan->tanggal_pemesanan;
            $tglAkhir = $pemesanan->kadaluarsa_paket;
            $idPaket = $pemesanan->id_paket;
    
            $dates = [];
    
            if ($idPaket == 1) {
                // Tampilkan tanggal setiap hari
                $dates = $this->getAllDates($tglAwal, $tglAkhir);
            } elseif ($idPaket == 2) {
                // Tampilkan tanggal setiap Senin dan Kamis
                $dates = $this->getMondayAndThursdayDates($tglAwal, $tglAkhir);
            } elseif ($idPaket == 3) {
                // Tampilkan tanggal setiap Senin
                $dates = $this->getMondayDates($tglAwal, $tglAkhir);
            }
    
            $datesByPemesanan[$pemesanan->id_paket] = $dates;
        }
    
        return view('frontend.jadwal', compact('datesByPemesanan', 'status', 'pemesanans'));
    }
    
    private function getAllDates($tglAwal, $tglAkhir)
    {
        $startDate = Carbon::parse($tglAwal);
        $endDate = Carbon::parse($tglAkhir);
    
        $dates = [];
    
        while ($startDate->lte($endDate)) {
            $dates[] = $startDate->toDateString();
            $startDate->addDay();
        }
    
        return $dates;
    }
    
    private function getMondayAndThursdayDates($tglAwal, $tglAkhir)
    {
        $startDate = Carbon::parse($tglAwal);
        $endDate = Carbon::parse($tglAkhir);
    
        $dates = [];
    
        while ($startDate->lte($endDate)) {
            if ($startDate->isMonday() || $startDate->isThursday()) {
                $dates[] = $startDate->toDateString();
            }
    
            $startDate->addDay();
        }
    
        return $dates;
    }
    
    private function getMondayDates($tglAwal, $tglAkhir)
    {
        $startDate = Carbon::parse($tglAwal);
        $endDate = Carbon::parse($tglAkhir);
    
        $dates = [];
    
        while ($startDate->lte($endDate)) {
            if ($startDate->isMonday()) {
                $dates[] = $startDate->toDateString();
            }
    
            $startDate->addDay();
        }
    
        return $dates;
    }


    public function contact()
    {
        return view('frontend.contact');
    }

    public function table()
    {
        return view('backend.table');
    }

    
    public function admin()
    {
        return view('backend.admin');
    }

    public function register()
    {
        return view('frontend.registerpage');
    }

    public function login()
    {
        return view('frontend.loginpage');
    }

    public function profil()
    {
        return view('frontend.profil');
    }

    public function datadiri()
    {
        $pelanggan = Pelanggan::where('id_users', Auth::user()->id)->first();

        if (!$pelanggan) {
            return view('frontend.registerpage');
        }

        
        return view('frontend.datadiripage', compact('pelanggan'));
    }
}
