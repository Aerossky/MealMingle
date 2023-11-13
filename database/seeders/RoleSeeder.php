<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'role' => "admin",
            ],
            [
                'role' => "tenant",
            ],
            [
                'role' => "customer",
            ]

        ];

        //insert data
        foreach ($data as $item) {
            Role::create([
                'role' => $item['role']
            ]);
        }
    }
}
