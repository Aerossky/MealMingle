<?php

namespace Database\Seeders;

use App\Models\Ulasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UlasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => "Budi",
                'email' => "budi123@gmail.com",
                'deskripsi' => "Tempatnya bagus, tapi mungkin perlu variasi menu yang lebih banyak."
            ],
            [
                'name' => "Siti",
                'email' => "siti456@gmail.com",
                'deskripsi' => "Pelayanan ramah, namun menu-menu yang ada terasa terlalu sedikit."
            ],
            [
                'name' => "Joko",
                'email' => "joko789@gmail.com",
                'deskripsi' => "Rasa makanannya enak, tetapi lebih baik jika ada opsi menu yang lebih beragam."
            ],
            [
                'name' => "Dewi",
                'email' => "dewi101@gmail.com",
                'deskripsi' => "Saya suka dengan tempatnya, tetapi mungkin bisa ditambahkan variasi menu vegetarian."
            ],
            [
                'name' => "Rina",
                'email' => "rina222@gmail.com",
                'deskripsi' => "Cocok untuk hangout, tetapi menu-menu yang ada terasa kurang inovatif."
            ]
        ];

        // insert data ke table
        foreach ($data as $item) {
            Ulasan::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'deskripsi' => $item['deskripsi'],
            ]);
        }
    }
}
