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
        Schema::table('history_order', function (Blueprint $table) {
            $table->string('status_bayar')->after('diterima');
            $table->string('status_order')->after('status_bayar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('history_order', function (Blueprint $table) {
            $table->dropColumn('status_bayar');
            $table->dropColumn('status_order');
        });
    }
};
