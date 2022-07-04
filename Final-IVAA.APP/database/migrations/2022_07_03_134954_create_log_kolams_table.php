<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_kolams', function (Blueprint $table) {
            $table->id('id_log');
            $table->string('nama_kolam');
            $table->integer('jumlah_tebar');
            $table->integer('totalKeluar');
            $table->integer('totalMasuk');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_kolam');
    }
};
