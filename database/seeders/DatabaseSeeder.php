<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            // users seeder
            RoleSeeder::class,
            UniversitasSeeder::class,
            UserSeeder::class,

            //tenants seeder
            TenantSeeder::class,
            // TenantUniversitasSeeder::class,

            //foods seeder
            MenuSeeder::class,
            KategoriSeeder::class,
            // MenuKategoriSeeder::class,

            //carts seeder
            KeranjangSeeder::class,
            KeranjangItemSeeder::class,

            //histories seeder
            // RiwayatPesananSeeder::class,
            // RiwayatPesananItemSeeder::class,

            //review seeder
            UlasanSeeder::class,
            UlasanTenantSeeder::class,

            //jadwal pengiriman seeder
            JadwalPengirimanSeeder::class,

        ]);
    }
}
