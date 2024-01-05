<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampahsTable extends Migration
{
    public function up()
    {
        Schema::create('sampahs', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_sampah');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sampahs');
    }
};
