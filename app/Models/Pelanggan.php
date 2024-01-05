<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'alamat_pl',
        'tlp_pl',
        'id_users',
        'latitude',
        'longitude',
    ];


    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_pelanggan');
    }

    
    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    
}
