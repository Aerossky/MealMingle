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
        Schema::create('tenant_universitas', function (Blueprint $table) {
            $table->unsignedBigInteger('universitas_id');
            $table->unsignedBigInteger('tenant_id');

            $table->foreign('universitas_id')->references('id')->on('universitas')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universitas_tenant');
    }
};
