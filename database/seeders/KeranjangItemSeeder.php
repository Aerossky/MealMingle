<?php

namespace Database\Seeders;

use App\Models\KeranjangItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeranjangItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'jumlah' => 2,
                'note_item' => 'mantap',
                'keranjang_id' => 1,
                'menu_id' => 1,
            ],
            [
                'jumlah' => 3,
                'note_item' => 'mantap',
                'keranjang_id' => 1,
                'menu_id' => 1,
            ],
            [
                'jumlah' => 3,
                'note_item' => 'mantap',
                'keranjang_id' => 1,
                'menu_id' => 3,
            ],
            [
                'jumlah' => 2,
                'note_item' => 'enak',
                'keranjang_id' => 2,
                'menu_id' => 2,
            ],
            [
                'jumlah' => 1,
                'note_item' => 'enak',
                'keranjang_id' => 2,
                'menu_id' => 5,
            ],
            [
                'jumlah' => 4,
                'note_item' => 'enak',
                'keranjang_id' => 2,
                'menu_id' => 4,
            ],
        ];

        //insert data
        foreach ($data as $item) {
            KeranjangItem::create([
                'jumlah' => $item['jumlah'],
                'note_item' => $item['note_item'],
                'keranjang_id' => $item['keranjang_id'],
                'menu_id' => $item['menu_id'],
            ]);
        }
    }
}
