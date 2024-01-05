<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan');
            $table->foreignId('id_paket');
            $table->date('tanggal_pemesanan');
            $table->string('status_pemesanan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};
