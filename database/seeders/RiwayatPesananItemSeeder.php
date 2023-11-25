<?php

namespace Database\Seeders;

use App\Models\RiwayatPesananItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatPesananItemSeeder extends Seeder
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
                'riwayat_pesanan_id' => 1,
            ],
            [
                'jumlah' => 3,
                'harga_item' => 10000,
                'riwayat_pesanan_id' => 1,
            ],
            [
                'jumlah' => 3,
                'harga_item' => 10000,
                'riwayat_pesanan_id' => 1,
            ],
            [
                'jumlah' => 2,
                'harga_item' => 25000,
                'riwayat_pesanan_id' => 2,
            ],
            [
                'jumlah' => 1,
                'harga_item' => 50000,
                'riwayat_pesanan_id' => 2,
            ],
            [
                'jumlah' => 4,
                'harga_item' => 12500,
                'riwayat_pesanan_id' => 2,
            ],
        ];

        //insert data
        foreach ($data as $item) {
            RiwayatPesananItem::create([
                'jumlah' => $item['jumlah'],
                'harga_item' => $item['harga_item'],
                'riwayat_pesanan_id' => $item['riwayat_pesanan_id'],
            ]);
        }
    }
}
