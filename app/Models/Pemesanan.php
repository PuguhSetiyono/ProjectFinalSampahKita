<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pelanggan',
        'id_paket',
        'tanggal_pemesanan',
        'status_pemesanan',
        'kadaluarsa_paket',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }
}
