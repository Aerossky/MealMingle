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
                'universitas_name' => "Universitas Ciputra Surabaya",
            ],
            [
                'universitas_name' => "Universitas Surabaya",
            ],
            [
                'universitas_name' => "Universitas Kristen Petra",
            ]
        ];

        //insert data
        foreach ($data as $item) {
            Universitas::create([
                'universitas_name' => $item['universitas_name'],
            ]);
        }
    }
}
