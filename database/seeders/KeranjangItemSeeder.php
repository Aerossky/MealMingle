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
                'harga_item' => 20000,
                'note_item' => 'mantap',
                'keranjang_id' => 1,
            ],
            [
                'jumlah' => 3,
                'harga_item' => 10000,
                'note_item' => 'mantap',
                'keranjang_id' => 1,
            ],
            [
                'jumlah' => 3,
                'harga_item' => 10000,
                'note_item' => 'mantap',
                'keranjang_id' => 1,
            ],
            [
                'jumlah' => 2,
                'harga_item' => 25000,
                'note_item' => 'enak',
                'keranjang_id' => 2,
            ],
            [
                'jumlah' => 1,
                'harga_item' => 50000,
                'note_item' => 'enak',
                'keranjang_id' => 2,
            ],
            [
                'jumlah' => 4,
                'harga_item' => 12500,
                'note_item' => 'enak',
                'keranjang_id' => 2,
            ],
        ];

        //insert data
        foreach ($data as $item) {
            KeranjangItem::create([
                'jumlah' => $item['jumlah'],
                'harga_item' => $item['harga_item'],
                'note_item' => $item['note_item'],
                'keranjang_id' => $item['keranjang_id'],
            ]);
        }
    }
}
