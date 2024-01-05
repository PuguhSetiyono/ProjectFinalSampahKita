<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusPembayaransTable extends Migration
{
    public function up()
    {
        Schema::create('status_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pembayaran');
            $table->string('status_pembayaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_pembayaran');
    }
};
