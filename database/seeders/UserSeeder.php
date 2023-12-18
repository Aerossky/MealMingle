<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => "Risky",
                'phone_number' => "08111",
                'password' => Hash::make('anjay123'),
                'status' => 'aktif',
                'universitas_id' => 1,
                'role_id' => 1,
            ],
            [
                'name' => "Reynaldo",
                'phone_number' => "08112",
                'password' => Hash::make('anjay123'),
                'status' => 'aktif',
                'universitas_id' => 1,
                'role_id' => 3,
            ],
            [
                'name' => "Joseph",
                'phone_number' => "08113",
                'password' => Hash::make('anjay123'),
                'status' => 'aktif',
                'universitas_id' => 1,
                'role_id' => 2,
            ],
            [
                'name' => "Jovan",
                'phone_number' => "08114",
                'password' => Hash::make('anjay123'),
                'status' => 'aktif',
                'universitas_id' => 1,
                'role_id' => 2,
            ],
            [
                'name' => "William",
                'phone_number' => "08115",
                'password' => Hash::make('anjay123'),
                'status' => 'aktif',
                'universitas_id' => 1,
                'role_id' => 2,
            ],
            [
                'name' => "Ilham",
                'phone_number' => "08116",
                'password' => Hash::make('anjay123'),
                'status' => 'aktif',
                'universitas_id' => 1,
                'role_id' => 2,
            ],
            [
                'name' => "Joss",
                'phone_number' => "08117",
                'password' => Hash::make('anjay123'),
                'status' => 'tidakaktif',
                'universitas_id' => 1,
                'role_id' => 2,
            ],

        ];

        //insert data
        foreach ($data as $item) {
            User::create([
                'name' => $item['name'],
                'phone_number' => $item['phone_number'],
                'password' => $item['password'],
                // 'jenis_kelamin' => $item['jenis_kelamin'],
                // 'alamat' => $item['alamat'],
                'status' => $item['status'],
                'universitas_id' => $item['universitas_id'],
                'role_id' => $item['role_id'],
            ]);
        }
    }
}
