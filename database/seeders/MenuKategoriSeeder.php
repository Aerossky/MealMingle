<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_id' => 1,
                'kategori_id' => 1,
            ],
            [
                'menu_id' => 2,
                'kategori_id' => 1,
            ],
            [
                'menu_id' => 3,
                'kategori_id' => 1,
            ],
            [
                'menu_id' => 4,
                'kategori_id' => 1,
            ],
            [
                'menu_id' => 5,
                'kategori_id' => 2,
            ],
            [
                'menu_id' => 6,
                'kategori_id' => 2,
            ],
        ];

        // insert data
        // foreach ($data as $item) {
        //     MenuKategori::create([
        //         'menu_id' => $item['menu_id'],
        //         'keranjang_item_id' => $item['keranjang_item_id'],
        //     ]);
        // }
    }
}
