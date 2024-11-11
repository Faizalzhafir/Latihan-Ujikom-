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
        Schema::table('transaksi_order', function (Blueprint $table) {
            $table->foreignId('id_user')->after('id_transaksi');
            $table->bigInteger('subtotal')->after('id_user');
            $table->string('nama_kasir')->after('subtotal');
            $table->enum('status',['selesai','pending'])->default('pending')->after('nama_kasir');
            $table->enum('status_order',['baru','proses','selesai','telah_diambil'])->default('baru')->after('status');
            $table->enum('status_bayar',['lunas','belum_lunas'])->default('belum_lunas')->after('status_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_order', function (Blueprint $table) {
            //
        });
    }
};
