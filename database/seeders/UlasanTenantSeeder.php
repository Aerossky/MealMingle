<?php

namespace Database\Seeders;

use App\Models\UlasanTenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UlasanTenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data
        $data = [
            [
                'ulasan' => "tempat bersih dan rasa makanan enak",
                'tenant_id' => 1,
                'user_id' => 2,
            ],
            [
                'ulasan' => "porsi banyak",
                'tenant_id' => 1,
                'user_id' => 7,
            ],
            [
                'ulasan' => "clean and delicioso",
                'tenant_id' => 2,
                'user_id' => 2,
            ],
            [
                'ulasan' => "big portion",
                'tenant_id' => 2,
                'user_id' => 7,
            ],

        ];

        // insert data ke table
        foreach ($data as $item) {
            UlasanTenant::create([
                'ulasan' => $item['ulasan'],
                'tenant_id' => $item['tenant_id'],
                'user_id' => $item['user_id'],
            ]);
        }
    }
}
