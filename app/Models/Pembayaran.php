<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pemesanan',
        'id_metode_pembayaran',
        'status_pembayaran',
    ];

    // Relationship with Pemesanan model
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    }
    
    // Relationship with MetodePembayaran model
    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'id_metode_pembayaran');
    }
}
