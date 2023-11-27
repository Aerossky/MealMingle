<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_kategori' => 'Ayam',
            ],
            [
                'nama_kategori' => 'Daging',
            ],
        ];

        foreach ($data as $item) {
            Kategori::create([
                'nama_kategori' => $item['nama_kategori'],
            ]);
        }
    }
}
