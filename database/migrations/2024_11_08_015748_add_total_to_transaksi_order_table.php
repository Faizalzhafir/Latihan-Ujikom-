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
            $table->integer('total_item')->after('id_histori');
            $table->integer('total_harga')->after('total_item');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_order', function (Blueprint $table) {
            $table->dropColumn('total_item');
            $table->dropColumn('total_harga');
        });
    }
};
