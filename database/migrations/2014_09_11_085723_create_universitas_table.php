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
        Schema::create('universitas', function (Blueprint $table) {
            $table->id();
            $table->string('universitas_name');
            $table->string('alamat');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('universitas', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::dropIfExists('universitas');
    }
};
