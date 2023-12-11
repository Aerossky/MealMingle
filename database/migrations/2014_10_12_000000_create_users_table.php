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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // number
            $table->string('phone_number')->unique();
            $table->string('password');
            // $table->string('email')->unique();
            // $table->string('jenis_kelamin');
            // $table->string('alamat');
            $table->enum('status', ['aktif', 'tidakaktif'])->default('aktif');
            $table->foreignId('universitas_id')->constrained('universitas')->onDelete('cascade');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::dropIfExists('users');
    }
};
