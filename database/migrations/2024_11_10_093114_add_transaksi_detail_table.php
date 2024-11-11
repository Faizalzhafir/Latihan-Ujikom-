<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deail_transaksi', function(Blueprint $table){
            $table->increments('id_detail');
            $table->foreignId('id_transaksi');
            $table->foreignId('id_pakaian');
            $table->foreignId('id_layanan');
            $table->foreignId('id_pembayaran');
            $table->string('nama_pakaian');
            $table->string('nama_layanan');
            $table->string('nama_pembayaran');
            $table->string('jumlah');
            $table->string('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
