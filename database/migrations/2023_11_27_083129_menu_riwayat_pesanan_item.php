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
        Schema::create('menu_riwayat_pesanan_item', function (Blueprint $table) {
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('riwayat_pesanan_item_id');

            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('riwayat_pesanan_item_id')->references('id')->on('riwayat_pesanan_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_riwayat_pesanan_item');
    }
};
