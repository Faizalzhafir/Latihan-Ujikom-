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
        Schema::create('transaksi_order', function(Blueprint $table){
            $table->increments('id_transaksi');
            $table->integer('id_layanan');
            $table->integer('id_pembayaran');
            $table->integer('id_pakaian');
            $table->integer('id_histori');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('subtotal');
            $table->string('status_order');
            $table->string('status_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_order');
    }
};
