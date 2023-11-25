<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_makanan' => "Mkanan A",
                'deskripsi' => "Siomay Ayam",
                'harga_produk' => 25000,
                'hari' => "Senin",
                'foto_produk' => "siomay.png",
                'tenant_id' => 1,
            ],
            [
                'nama_makanan' => "Mkanan B",
                'deskripsi' => "Ayam Bakar",
                'harga_produk' => 20000,
                'hari' => "Senin",
                'foto_produk' => "ayambakar.png",
                'tenant_id' => 2,
            ],
            [
                'nama_makanan' => "Mkanan C",
                'deskripsi' => "4T",
                'harga_produk' => 12500,
                'hari' => "Senin",
                'foto_produk' => "4T.png",
                'tenant_id' => 2,
            ],
            [
                'nama_makanan' => "Mkanan D",
                'deskripsi' => "Nasi kuning",
                'harga_produk' => 10000,
                'hari' => "Senin",
                'foto_produk' => "nasku.png",
                'tenant_id' => 2,
            ],
            [
                'nama_makanan' => "Mkanan E",
                'deskripsi' => "Nasi Campur",
                'harga_produk' => 10000,
                'hari' => "Senin",
                'foto_produk' => "nasca.png",
                'tenant_id' => 1,
            ],
            [
                'nama_makanan' => "Mkanan F",
                'deskripsi' => "Gyudon Sambal Matah",
                'harga_produk' => 50000,
                'hari' => "Senin",
                'foto_produk' => "gyudon.png",
                'tenant_id' => 1,
            ],

        ];

        //insert data
        foreach ($data as $item) {
            Menu::create([
                'nama_makanan' => $item['nama_makanan'],
                'deskripsi' => $item['deskripsi'],
                'harga_produk' => $item['harga_produk'],
                'hari' => $item['hari'],
                'foto_produk' => $item['foto_produk'],
                'tenant_id' => $item['tenant_id'],
            ]);
        }
    }
}
