<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class CreatePaketsTable extends Migration 
{
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_armada');
            $table->foreignId('id_jadwal');
            $table->string('nama_paket');
            $table->float('harga_paket');
            $table->dateTime('kadaluarsa_paket');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pakets');
    }
};
