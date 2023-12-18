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
                'alamat' => "Universitas Ciputra Surabaya
                CitraLand CBD Boulevard, Made, Kec. Sambikerep, Surabaya, Jawa Timur 60219",
            ],
        ];

        //insert data
        foreach ($data as $item) {
            Universitas::create([
                'universitas_name' => $item['universitas_name'],
                'alamat' => $item['alamat'],
            ]);
        }
    }
}
