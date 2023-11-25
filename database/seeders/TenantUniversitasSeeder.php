<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantUniversitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'universitas_id' => 1,
                'tenant_id' => 1,
            ],
            [
                'universitas_id' => 2,
                'tenant_id' => 1,
            ],
            [
                'universitas_id' => 3,
                'tenant_id' => 1,
            ],
            [
                'universitas_id' => 1,
                'tenant_id' => 2,
            ],
            [
                'universitas_id' => 2,
                'tenant_id' => 2,
            ],
            [
                'universitas_id' => 3,
                'tenant_id' => 2,
            ],
        ];

        //insert data
        // foreach ($data as $item) {
        //     TenantUniversitas::create([
        //         'universitas_id' => $item['universitas_id'],
        //         'tenant_id' => $item['tenant_id'],
        //     ]);
        // }
    }
}
