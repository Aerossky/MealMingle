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
        Schema::create('riwayat_pesanan_items', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->integer('harga_item');
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade');
            $table->foreignId('riwayat_pesanan_id')->constrained('riwayat_pesanans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pesanan_items');
    }
};
