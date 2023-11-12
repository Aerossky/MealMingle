<?php

namespace Database\Seeders;

use App\Models\Universitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'universitas' => "Universitas Ciputra Surabaya",
            ],
            [
                'universitas' => "Universitas Surabaya",
            ],
            [
                'universitas' => "Universitas Kristen Petra",
            ]
        ];

        //insert data
        foreach ($data as $item) {
            Universitas::create([
                'universitas' => $item['universitas'],
            ]);
        }
    }
}
