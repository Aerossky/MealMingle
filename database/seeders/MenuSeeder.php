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
                'foto_produk' => "Mkanan A",
                'nama_makanan' => "Siomay",
                'deskripsi' => "terbuat dari ayam",
                'harga_produk' => "30000",
                'tenant_id' => "1",
            ],
            [
                'foto_produk' => "Mkanan B",
                'nama_makanan' => "Hakau",
                'deskripsi' => "terbuat dari udang",
                'harga_produk' => "32000",
                'tenant_id' => "1",
            ],
            [
                'foto_produk' => "Mkanan C",
                'nama_makanan' => "Bakpao",
                'deskripsi' => "terbuat dari ayam",
                'harga_produk' => "28000",
                'tenant_id' => "2",
            ],
            [
                'foto_produk' => "Mkanan D",
                'nama_makanan' => "Bakso",
                'deskripsi' => "terbuat dari Babi",
                'harga_produk' => "35000",
                'tenant_id' => "2",
            ],
        ];

        //insert data
        foreach ($data as $item) {
            Menu::create([
                'foto_produk' => $item['foto_produk'],
                'nama_makanan' => $item['nama_makanan'],
                'deskripsi' => $item['deskripsi'],
                'harga_produk' => $item['harga_produk'],
                'tenant_id' => $item['tenant_id'],
            ]);
        }
    }
}
