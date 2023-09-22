<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductMaterialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_materials')->delete();
        
        \DB::table('product_materials')->insert(array (
            0 => 
            array (
                'code' => 'BBK-0001',
                'created_at' => '2023-09-20 11:37:30',
                'deleted_at' => NULL,
                'id' => 1,
                'in_stock' => 46,
                'name' => 'Kain Jersey Milano',
                'supplier_id' => 1,
                'unit_measure' => 'pcs',
                'updated_at' => '2023-09-22 10:12:03',
            ),
            1 => 
            array (
                'code' => 'BBK-0002',
                'created_at' => '2023-09-20 11:37:57',
                'deleted_at' => NULL,
                'id' => 2,
                'in_stock' => 25,
                'name' => 'Kain Jersey Serena',
                'supplier_id' => 1,
                'unit_measure' => 'pcs',
                'updated_at' => '2023-09-22 10:06:24',
            ),
            2 => 
            array (
                'code' => 'BBK-0003',
                'created_at' => '2023-09-20 11:38:14',
                'deleted_at' => NULL,
                'id' => 3,
                'in_stock' => 25,
                'name' => 'Kain Jersey Brazil',
                'supplier_id' => 2,
                'unit_measure' => 'pcs',
                'updated_at' => '2023-09-22 10:07:41',
            ),
            3 => 
            array (
                'code' => 'BBK-0004',
                'created_at' => '2023-09-20 11:39:02',
                'deleted_at' => NULL,
                'id' => 4,
                'in_stock' => 50,
                'name' => 'Kain Bendera Satin',
                'supplier_id' => 2,
                'unit_measure' => 'm',
                'updated_at' => '2023-09-22 10:06:24',
            ),
            4 => 
            array (
                'code' => 'BBK-0005',
                'created_at' => '2023-09-20 11:39:27',
                'deleted_at' => NULL,
                'id' => 5,
                'in_stock' => 50,
                'name' => 'Kain Bendera Peles',
                'supplier_id' => 1,
                'unit_measure' => 'm',
                'updated_at' => '2023-09-22 08:08:47',
            ),
            5 => 
            array (
                'code' => 'BBK-0006',
                'created_at' => '2023-09-20 11:39:51',
                'deleted_at' => NULL,
                'id' => 7,
                'in_stock' => 1,
            'name' => 'Tinta Sublim (2Y,1K)',
                'supplier_id' => 1,
                'unit_measure' => 'set',
                'updated_at' => '2023-09-20 14:10:49',
            ),
            6 => 
            array (
                'code' => 'BBK-0007',
                'created_at' => '2023-09-20 11:40:21',
                'deleted_at' => NULL,
                'id' => 8,
                'in_stock' => 75,
                'name' => 'Kertas Transfer Paper 120cm',
                'supplier_id' => 2,
                'unit_measure' => 'm',
                'updated_at' => '2023-09-22 08:08:47',
            ),
            7 => 
            array (
                'code' => 'BBK-0008',
                'created_at' => '2023-09-20 11:40:48',
                'deleted_at' => NULL,
                'id' => 9,
                'in_stock' => 130,
                'name' => 'Tali Lanyard',
                'supplier_id' => 1,
                'unit_measure' => 'm',
                'updated_at' => '2023-09-22 10:07:41',
            ),
            8 => 
            array (
                'code' => 'BBK-0009',
                'created_at' => '2023-09-20 11:41:03',
                'deleted_at' => NULL,
                'id' => 10,
                'in_stock' => 300,
                'name' => 'Cantolan Lanyard',
                'supplier_id' => 1,
                'unit_measure' => 'pcs',
                'updated_at' => '2023-09-22 10:07:41',
            ),
            9 => 
            array (
                'code' => 'BBK-0010',
                'created_at' => '2023-09-20 11:41:24',
                'deleted_at' => NULL,
                'id' => 11,
                'in_stock' => 300,
                'name' => 'Stopper',
                'supplier_id' => 1,
                'unit_measure' => 'pcs',
                'updated_at' => '2023-09-22 10:07:41',
            ),
            10 => 
            array (
                'code' => 'BBK-0011',
                'created_at' => '2023-09-20 11:43:26',
                'deleted_at' => NULL,
                'id' => 12,
                'in_stock' => 0,
                'name' => 'Kain Jersey Nike',
                'supplier_id' => 2,
                'unit_measure' => 'pcs',
                'updated_at' => '2023-09-22 07:17:39',
            ),
            11 => 
            array (
                'code' => 'BBK-0012',
                'created_at' => '2023-09-20 11:44:04',
                'deleted_at' => NULL,
                'id' => 13,
                'in_stock' => 0,
                'name' => 'Kain Jersey Dryfit Standar',
                'supplier_id' => 1,
                'unit_measure' => 'cm',
                'updated_at' => '2023-09-22 07:17:39',
            ),
            12 => 
            array (
                'code' => 'BBK-0013',
                'created_at' => '2023-09-20 11:45:36',
                'deleted_at' => NULL,
                'id' => 14,
                'in_stock' => 0,
            'name' => 'Tinta Sublim (CMYK)',
                'supplier_id' => 1,
                'unit_measure' => 'set',
                'updated_at' => '2023-09-22 06:57:04',
            ),
            13 => 
            array (
                'code' => 'BBK-0014',
                'created_at' => '2023-09-20 11:46:32',
                'deleted_at' => NULL,
                'id' => 15,
                'in_stock' => 0,
                'name' => 'Kain Jersey Benzema',
                'supplier_id' => 1,
                'unit_measure' => 'pcs',
                'updated_at' => '2023-09-22 07:40:27',
            ),
            14 => 
            array (
                'code' => 'BBK-0015',
                'created_at' => '2023-09-20 11:46:58',
                'deleted_at' => NULL,
                'id' => 16,
                'in_stock' => 0,
                'name' => 'Kertas Transfer Paper 160cm',
                'supplier_id' => 1,
                'unit_measure' => 'm',
                'updated_at' => '2023-09-22 08:08:47',
            ),
        ));
        
        
    }
}