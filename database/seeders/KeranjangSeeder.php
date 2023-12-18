<?php

namespace Database\Seeders;

use App\Models\Keranjang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeranjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'total_harga' => 0,
                'note_pesanan' => '',
                'user_id' => 1,
            ],
            [
                'total_harga' => 0,
                'note_pesanan' => '',
                'user_id' => 2,
            ],
            [
                'total_harga' => 0,
                'note_pesanan' => '',
                'user_id' => 3,
            ],
            [
                'total_harga' => 0,
                'note_pesanan' => null,
                'user_id' => 4,
            ],
            [
                'total_harga' => 0,
                'note_pesanan' => null,
                'user_id' => 5,
            ],
            [
                'total_harga' => 0,
                'note_pesanan' => null,
                'user_id' => 6,
            ],
            [
                'total_harga' => 0,
                'note_pesanan' => null,
                'user_id' => 7,
            ],
        ];

        //insert data
        foreach ($data as $item) {
            Keranjang::create([
                'total_harga' => $item['total_harga'],
                'note_pesanan' => $item['note_pesanan'],
                'user_id' => $item['user_id'],
            ]);
        }
    }
}
