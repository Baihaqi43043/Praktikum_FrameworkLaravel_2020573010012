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
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->id('id_pengeluaran');
            $table->foreignId('id_kolam')->constrained('kolams','id_kolam');
            $table->foreignId('id_barang')->constrained('barangs','id_barang');
            $table->string('nama_barang');
            $table->integer('jumlah');
            $table->string('nama_kolam');
            $table->integer('jumlah_tebar');
            $table->integer('harga')->constrained('barangs','harga');
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
        Schema::dropIfExists('pengeluarans');
    }
};
