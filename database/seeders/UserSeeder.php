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
                'email' => "admin@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'status' => 'aktif',
                'universitas_id' => 1,
                'role_id' => 1,
            ],
            [
                'name' => "Reynaldo",
                'email' => "customer@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'status' => 'tidakaktif',
                'universitas_id' => 2,
                'role_id' => 3,
            ],
            [
                'name' => "Joseph",
                'email' => "tenant1@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'status' => 'aktif',
                'universitas_id' => 3,
                'role_id' => 2,
            ],
            [
                'name' => "Jovan",
                'email' => "tenant2@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'status' => 'aktif',
                'universitas_id' => 3,
                'role_id' => 2,
            ],
            [
                'name' => "William",
                'email' => "tenant3@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'status' => 'aktif',
                'universitas_id' => 3,
                'role_id' => 2,
            ],
            [
                'name' => "Ilham",
                'email' => "tenant4@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'status' => 'aktif',
                'universitas_id' => 3,
                'role_id' => 2,
            ],
            [
                'name' => "Joss",
                'email' => "customer1@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'status' => 'tidakaktif',
                'universitas_id' => 1,
                'role_id' => 2,
            ],

        ];

        //insert data
        foreach ($data as $item) {
            User::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => $item['password'],
                'jenis_kelamin' => $item['jenis_kelamin'],
                'alamat' => $item['alamat'],
                'status' => $item['status'],
                'universitas_id' => $item['universitas_id'],
                'role_id' => $item['role_id'],
            ]);
        }
    }
}
