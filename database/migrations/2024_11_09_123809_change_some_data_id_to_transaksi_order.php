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
            $table->integer('id_pakaian')->after('id_transaksi');
            $table->integer('id_layanan')->after('id_pakaian');
            $table->integer('id_pembayaran')->after('id_layanan');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_order', function (Blueprint $table) {
            $table->dropColumn('id_pakaian');
            $table->dropColumn('id_layanan');
            $table->dropColumn('id_pembayaran');
        });
    }
};

