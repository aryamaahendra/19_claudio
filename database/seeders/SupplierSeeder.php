<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
                'code' => 'SPL-001',
                'name' => 'Supplier Baru',
                'email' => 'supplier@baru.com',
                'phone' => '081256893654',
                'address' => 'Jl. Dwi Sartika No.103',
            ],
            [
                'code' => 'SPL-002',
                'name' => 'Supplier Lama',
                'email' => 'supplier@lama.com',
                'phone' => '081256897844',
                'address' => 'Jl. Tanjung Manimbaya No.103',
            ]
        ];

        foreach ($rows as $row) {
            Supplier::create($row);
        }
    }
}
