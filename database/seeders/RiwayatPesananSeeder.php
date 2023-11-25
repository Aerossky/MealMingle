<?php

namespace Database\Seeders;

use App\Models\RiwayatPesanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatPesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'total_harga' => 100000,
                'payment_type' => 'tranfer',
                'transaction_status' => 'pending',
                'user_id' => '2',
            ],
            [
                'total_harga' => 150000,
                'payment_type' => 'cash',
                'transaction_status' => 'complete',
                'user_id' => '7',
            ],
        ];

        //insert data
        foreach ($data as $item){
            RiwayatPesanan::create([
                'total_harga' => $item['total_harga'],
                'payment_type' => $item['payment_type'],
                'transaction_status' => $item['transaction_status'],
                'user_id' => $item['user_id'],
            ]);
        }
    }
}
