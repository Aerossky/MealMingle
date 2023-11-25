<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\Universitas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // seed data
        $this->call([
            RoleSeeder::class,
            UniversitasSeeder::class,
            UserSeeder::class,
            TenantSeeder::class,
            MenuSeeder::class,
            UlasanSeeder::class,
        ]);
    }
}
