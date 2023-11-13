<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => "Risky",
                'user_id' => '1',
            ],
            [
                'name' => "Reynaldo",
                'user_id' => '3',
            ],
            [
                'name' => "Joseph",
                'user_id' => '2',
            ]

        ];

        //insert data
        foreach ($data as $item) {
            Tenant::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => $item['password'],
                'jenis_kelamin' => $item['jenis_kelamin'],
                'alamat' => $item['alamat'],
                'universitas_id' => $item['universitas_id'],
                'role_id' => $item['role_id'],
            ]);
        }
    }
}
