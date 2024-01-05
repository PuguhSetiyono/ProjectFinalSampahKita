<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmadasTable extends Migration
{
    public function up()
    {
        Schema::create('armadas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_armada');
            $table->integer('kapasitas_angkut');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('armadas');
    }
};
