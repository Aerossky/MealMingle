<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuRiwayatPesananItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_id' => 2,
                'riwayat_pesanan_item_id' => 1,
            ],
            [
                'menu_id' => 4,
                'keranjang_item_id' => 2,
            ],
            [
                'menu_id' => 5,
                'keranjang_item_id' => 3,
            ],
            [
                'menu_id' => 1,
                'keranjang_item_id' => 4,
            ],
            [
                'menu_id' => 6,
                'keranjang_item_id' => 5,
            ],
            [
                'menu_id' => 3,
                'keranjang_item_id' => 6,
            ],
        ];

        //insert data
        // foreach ($data as $item) {
        //     MenuRiwayatPesananItem::create([
        //         'menu_id' => $item['menu_id'],
        //         'keranjang_item_id' => $item['keranjang_item_id'],
        //     ]);
        // }
    }
}
