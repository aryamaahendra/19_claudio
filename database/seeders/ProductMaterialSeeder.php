<?php

namespace Database\Seeders;

use App\Helpers\UnitMeasureEnum;
use App\Models\ProductMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
                'code' => 'MTR-001',
                'name' => 'Kain Jersey Milano',
                'unit_measure' => UnitMeasureEnum::M->value,
                'supplier_id' => 1,
            ],
            [
                'code' => 'MTR-002',
                'name' => 'Kain Jersey Nike',
                'unit_measure' => UnitMeasureEnum::M->value,
                'supplier_id' => 1,
            ],
            [
                'code' => 'MTR-003',
                'name' => 'Kain Jersey Dryfit Standar',
                'unit_measure' => UnitMeasureEnum::M->value,
                'supplier_id' => 2,
            ],
            [
                'code' => 'MTR-004',
                'name' => 'Kain Bendera Satin',
                'unit_measure' => UnitMeasureEnum::M->value,
                'supplier_id' => 2,
            ],
            [
                'code' => 'MTR-005',
                'name' => 'Tinta Sublim (CMYK)',
                'unit_measure' => UnitMeasureEnum::SET->value,
                'supplier_id' => 1,
            ],
            [
                'code' => 'MTR-006',
                'name' => 'Kertas Transfer Paper 160cm',
                'unit_measure' => UnitMeasureEnum::CM->value,
                'supplier_id' => 1,
            ]
        ];

        foreach ($rows as $row) {
            ProductMaterial::create($row);
        }
    }
}
