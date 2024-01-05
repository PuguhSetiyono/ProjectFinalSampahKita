<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pemesanan');
            $table->foreignId('id_metode_pembayaran');
            $table->tinyInteger('status_pembayaran')->default(0); // 0: Belum Lunas, 1: Lunas
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
