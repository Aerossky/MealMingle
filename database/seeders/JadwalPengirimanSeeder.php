<?php

namespace Database\Seeders;

use App\Models\JadwalPengiriman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalPengirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'hari' => "Senin",
                'waktu' => "11:00",
            ],
            [
                'hari' => "Selasa",
                'waktu' => "11:00",
            ],
            [
                'hari' => "Rabu",
                'waktu' => "11:00",
            ],

        ];

        //insert data
        foreach ($data as $item) {
            JadwalPengiriman::create([
                'hari' => $item['hari'],
                'waktu' => $item['waktu'],
            ]);
        }
    }
}
