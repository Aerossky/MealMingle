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
                'nama_makanan' => "Nasi Katsu",
                'deskripsi' => "Nasi Katsu adalah hidangan Jepang yang terdiri dari nasi yang disajikan dengan irisan daging yang digoreng dengan tepung roti. Biasanya disajikan dengan saus khusus.",
                'harga_produk' => 25000,
                'hari' => "Senin",
                'foto_produk' => "nasi-katsu.jpg",
                'tenant_id' => 1,
            ],
            [
                'nama_makanan' => "Nasi Goreng",
                'deskripsi' => "Nasi Goreng adalah hidangan Indonesia yang terdiri dari nasi yang digoreng bersama bumbu, biasanya dengan tambahan daging, sayuran, dan telur.",
                'harga_produk' => 20000,
                'hari' => "Senin",
                'foto_produk' => "nasigoreng.jpg",
                'tenant_id' => 1,
            ],
            [
                'nama_makanan' => "Siomay",
                'deskripsi' => "Siomay adalah hidangan Tionghoa yang terdiri dari irisan daging ikan atau ayam yang dibungkus dengan kulit pangsit, biasanya disajikan dengan saus kacang atau saus pedas.",
                'harga_produk' => 12500,
                'hari' => "Senin",
                'foto_produk' => "siomay.jpg",
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
