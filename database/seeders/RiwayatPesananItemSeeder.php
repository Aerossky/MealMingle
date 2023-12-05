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
            // [
            //     'jumlah' => 2,
            //     'riwayat_pesanan_id' => 1,
            //     'menu_id' => 1,
            // ],
            // [
            //     'jumlah' => 3,
            //     'riwayat_pesanan_id' => 1,
            //     'menu_id' => 2,
            // ],
            // [
            //     'jumlah' => 3,
            //     'riwayat_pesanan_id' => 1,
            //     'menu_id' => 2,
            // ],
            // [
            //     'jumlah' => 2,
            //     'riwayat_pesanan_id' => 2,
            //     'menu_id' => 5,
            // ],
            // [
            //     'jumlah' => 1,
            //     'riwayat_pesanan_id' => 2,
            //     'menu_id' => 4,
            // ],
            // [
            //     'jumlah' => 4,
            //     'riwayat_pesanan_id' => 2,
            //     'menu_id' => 3,
            // ],
        ];

        //insert data
        foreach ($data as $item) {
            RiwayatPesananItem::create([
                'jumlah' => $item['jumlah'],
                'riwayat_pesanan_id' => $item['riwayat_pesanan_id'],
                'menu_id' => $item['menu_id'],
            ]);
        }
    }
}
