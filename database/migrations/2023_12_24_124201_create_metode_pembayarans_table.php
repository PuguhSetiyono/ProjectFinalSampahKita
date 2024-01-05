<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodePembayaransTable extends Migration
{
    public function up()
    {
        Schema::create('metode_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('metode_pembayaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('metode_pembayarans');
    }
};
