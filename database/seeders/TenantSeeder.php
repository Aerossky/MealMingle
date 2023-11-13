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
                'nama_tenant' => "PAPA JOE'S",
                'deskripsi' => "restorant papa joe",
                'user_id' => "3",
                'foto_tenant' => "PAPA JOE",
            ],
            [
                'nama_tenant' => "PAPA JOV",
                'deskripsi' => "restorant papa jov",
                'user_id' => "4",
                'foto_tenant' => "PAPA JOV",
            ],
        ];

        //insert data
        foreach ($data as $item) {
            Tenant::create([
                'nama_tenant' => $item['nama_tenant'],
                'deskripsi' => $item['deskripsi'],
                'user_id' => $item['user_id'],
                'foto_tenant' => $item['foto_tenant'],
            ]);
        }
    }
}
