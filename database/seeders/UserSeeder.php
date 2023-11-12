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
                'universitas_id' => '1',
                'role_id' => '1',
            ],
            [
                'name' => "Reynaldo",
                'email' => "customer@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'universitas_id' => '2',
                'role_id' => '3',
            ],
            [
                'name' => "Joseph",
                'email' => "tenant@gmail.com",
                'password' => Hash::make('anjay123'), // password
                'jenis_kelamin' => 'male',
                'alamat' => 'North West',
                'universitas_id' => '3',
                'role_id' => '2',
            ]

        ];

        //insert data
        foreach ($data as $item) {
            User::create([
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
