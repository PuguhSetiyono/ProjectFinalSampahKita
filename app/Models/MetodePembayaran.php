<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'metode_pembayaran',
    ];

    // In Pembayaran.php model
public function metodePembayaran()
{
    return $this->belongsTo(MetodePembayaran::class, 'id_metode_pembayaran');
}

// In MetodePembayaran.php model
public function pembayarans()
{
    return $this->hasMany(Pembayaran::class, 'id_metode_pembayaran');
}

}
