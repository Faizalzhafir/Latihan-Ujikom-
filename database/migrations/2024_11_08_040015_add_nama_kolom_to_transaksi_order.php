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
            $table->string('nama_pakaian')->after('id_history');
            $table->string('nama_layanan')->after('nama_pakaian');
            $table->string('nama_pembayaran')->after('nama_layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_order', function (Blueprint $table) {
            $table->dropColumn('nama_pakaian');
            $table->dropColumn('nama_layanan');
            $table->dropColumn('nama_pembayaran');
        });
    }
};
