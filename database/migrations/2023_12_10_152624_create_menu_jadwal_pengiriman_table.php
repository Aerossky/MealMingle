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
        Schema::create('menu_jadwal_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('jadwal_pengiriman_id');
            $table->timestamps();

            // foreign key
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('jadwal_pengiriman_id')->references('id')->on('jadwal_pengiriman')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_jadwal_pengiriman');
    }
};
