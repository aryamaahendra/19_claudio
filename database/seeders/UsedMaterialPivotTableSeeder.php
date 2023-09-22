<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsedMaterialPivotTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('used_material_pivot')->delete();
        
        \DB::table('used_material_pivot')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 1,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 1,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 2,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 1,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 3,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 1,
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 4,
                'material_id' => 12,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 1,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 5,
                'material_id' => 13,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 1,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 6,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 1,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'id' => 7,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 1,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'id' => 8,
                'material_id' => 1,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 2,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'id' => 9,
                'material_id' => 4,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 2,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'id' => 10,
                'material_id' => 5,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 2,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'material_id' => 12,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 2,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'id' => 12,
                'material_id' => 13,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 2,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'id' => 13,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 2,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'id' => 14,
                'material_id' => 15,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 2,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'id' => 15,
                'material_id' => 16,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 2,
            ),
            15 => 
            array (
                'created_at' => NULL,
                'id' => 16,
                'material_id' => 1,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            16 => 
            array (
                'created_at' => NULL,
                'id' => 17,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'id' => 18,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            18 => 
            array (
                'created_at' => NULL,
                'id' => 19,
                'material_id' => 8,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            19 => 
            array (
                'created_at' => NULL,
                'id' => 20,
                'material_id' => 12,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            20 => 
            array (
                'created_at' => NULL,
                'id' => 21,
                'material_id' => 13,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            21 => 
            array (
                'created_at' => NULL,
                'id' => 22,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            22 => 
            array (
                'created_at' => NULL,
                'id' => 23,
                'material_id' => 15,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            23 => 
            array (
                'created_at' => NULL,
                'id' => 24,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 3,
            ),
            24 => 
            array (
                'created_at' => NULL,
                'id' => 25,
                'material_id' => 1,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 4,
            ),
            25 => 
            array (
                'created_at' => NULL,
                'id' => 26,
                'material_id' => 4,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 4,
            ),
            26 => 
            array (
                'created_at' => NULL,
                'id' => 27,
                'material_id' => 5,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 4,
            ),
            27 => 
            array (
                'created_at' => NULL,
                'id' => 28,
                'material_id' => 8,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 4,
            ),
            28 => 
            array (
                'created_at' => NULL,
                'id' => 29,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 4,
            ),
            29 => 
            array (
                'created_at' => NULL,
                'id' => 30,
                'material_id' => 15,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 4,
            ),
            30 => 
            array (
                'created_at' => NULL,
                'id' => 31,
                'material_id' => 16,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 4,
            ),
            31 => 
            array (
                'created_at' => NULL,
                'id' => 32,
                'material_id' => 1,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 5,
            ),
            32 => 
            array (
                'created_at' => NULL,
                'id' => 33,
                'material_id' => 2,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 5,
            ),
            33 => 
            array (
                'created_at' => NULL,
                'id' => 34,
                'material_id' => 4,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 5,
            ),
            34 => 
            array (
                'created_at' => NULL,
                'id' => 35,
                'material_id' => 5,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 5,
            ),
            35 => 
            array (
                'created_at' => NULL,
                'id' => 36,
                'material_id' => 8,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 5,
            ),
            36 => 
            array (
                'created_at' => NULL,
                'id' => 37,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 5,
            ),
            37 => 
            array (
                'created_at' => NULL,
                'id' => 38,
                'material_id' => 15,
                'quantity' => 5,
                'updated_at' => NULL,
                'used_material_id' => 5,
            ),
            38 => 
            array (
                'created_at' => NULL,
                'id' => 39,
                'material_id' => 16,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 5,
            ),
            39 => 
            array (
                'created_at' => NULL,
                'id' => 40,
                'material_id' => 1,
                'quantity' => 45,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            40 => 
            array (
                'created_at' => NULL,
                'id' => 41,
                'material_id' => 2,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            41 => 
            array (
                'created_at' => NULL,
                'id' => 42,
                'material_id' => 3,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            42 => 
            array (
                'created_at' => NULL,
                'id' => 43,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            43 => 
            array (
                'created_at' => NULL,
                'id' => 44,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            44 => 
            array (
                'created_at' => NULL,
                'id' => 45,
                'material_id' => 8,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            45 => 
            array (
                'created_at' => NULL,
                'id' => 46,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            46 => 
            array (
                'created_at' => NULL,
                'id' => 47,
                'material_id' => 15,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            47 => 
            array (
                'created_at' => NULL,
                'id' => 48,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 6,
            ),
            48 => 
            array (
                'created_at' => NULL,
                'id' => 49,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 7,
            ),
            49 => 
            array (
                'created_at' => NULL,
                'id' => 50,
                'material_id' => 2,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 7,
            ),
            50 => 
            array (
                'created_at' => NULL,
                'id' => 51,
                'material_id' => 3,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 7,
            ),
            51 => 
            array (
                'created_at' => NULL,
                'id' => 52,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 7,
            ),
            52 => 
            array (
                'created_at' => NULL,
                'id' => 53,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 7,
            ),
            53 => 
            array (
                'created_at' => NULL,
                'id' => 54,
                'material_id' => 8,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 7,
            ),
            54 => 
            array (
                'created_at' => NULL,
                'id' => 55,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 7,
            ),
            55 => 
            array (
                'created_at' => NULL,
                'id' => 56,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 7,
            ),
            56 => 
            array (
                'created_at' => NULL,
                'id' => 57,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            57 => 
            array (
                'created_at' => NULL,
                'id' => 58,
                'material_id' => 2,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            58 => 
            array (
                'created_at' => NULL,
                'id' => 59,
                'material_id' => 3,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            59 => 
            array (
                'created_at' => NULL,
                'id' => 60,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            60 => 
            array (
                'created_at' => NULL,
                'id' => 61,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            61 => 
            array (
                'created_at' => NULL,
                'id' => 62,
                'material_id' => 8,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            62 => 
            array (
                'created_at' => NULL,
                'id' => 63,
                'material_id' => 9,
                'quantity' => 40,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            63 => 
            array (
                'created_at' => NULL,
                'id' => 64,
                'material_id' => 10,
                'quantity' => 150,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            64 => 
            array (
                'created_at' => NULL,
                'id' => 65,
                'material_id' => 11,
                'quantity' => 100,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            65 => 
            array (
                'created_at' => NULL,
                'id' => 66,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            66 => 
            array (
                'created_at' => NULL,
                'id' => 67,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 8,
            ),
            67 => 
            array (
                'created_at' => NULL,
                'id' => 68,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            68 => 
            array (
                'created_at' => NULL,
                'id' => 69,
                'material_id' => 2,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            69 => 
            array (
                'created_at' => NULL,
                'id' => 70,
                'material_id' => 3,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            70 => 
            array (
                'created_at' => NULL,
                'id' => 71,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            71 => 
            array (
                'created_at' => NULL,
                'id' => 72,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            72 => 
            array (
                'created_at' => NULL,
                'id' => 73,
                'material_id' => 8,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            73 => 
            array (
                'created_at' => NULL,
                'id' => 74,
                'material_id' => 9,
                'quantity' => 40,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            74 => 
            array (
                'created_at' => NULL,
                'id' => 75,
                'material_id' => 10,
                'quantity' => 150,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            75 => 
            array (
                'created_at' => NULL,
                'id' => 76,
                'material_id' => 11,
                'quantity' => 100,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            76 => 
            array (
                'created_at' => NULL,
                'id' => 77,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            77 => 
            array (
                'created_at' => NULL,
                'id' => 78,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 9,
            ),
            78 => 
            array (
                'created_at' => NULL,
                'id' => 79,
                'material_id' => 1,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            79 => 
            array (
                'created_at' => NULL,
                'id' => 80,
                'material_id' => 2,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            80 => 
            array (
                'created_at' => NULL,
                'id' => 82,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            81 => 
            array (
                'created_at' => NULL,
                'id' => 83,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            82 => 
            array (
                'created_at' => NULL,
                'id' => 84,
                'material_id' => 8,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            83 => 
            array (
                'created_at' => NULL,
                'id' => 85,
                'material_id' => 9,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            84 => 
            array (
                'created_at' => NULL,
                'id' => 86,
                'material_id' => 10,
                'quantity' => 50,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            85 => 
            array (
                'created_at' => NULL,
                'id' => 87,
                'material_id' => 11,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            86 => 
            array (
                'created_at' => NULL,
                'id' => 88,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            87 => 
            array (
                'created_at' => NULL,
                'id' => 89,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 10,
            ),
            88 => 
            array (
                'created_at' => NULL,
                'id' => 112,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            89 => 
            array (
                'created_at' => NULL,
                'id' => 113,
                'material_id' => 2,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            90 => 
            array (
                'created_at' => NULL,
                'id' => 114,
                'material_id' => 3,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            91 => 
            array (
                'created_at' => NULL,
                'id' => 115,
                'material_id' => 4,
                'quantity' => 35,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            92 => 
            array (
                'created_at' => NULL,
                'id' => 116,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            93 => 
            array (
                'created_at' => NULL,
                'id' => 117,
                'material_id' => 8,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            94 => 
            array (
                'created_at' => NULL,
                'id' => 118,
                'material_id' => 9,
                'quantity' => 40,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            95 => 
            array (
                'created_at' => NULL,
                'id' => 119,
                'material_id' => 10,
                'quantity' => 150,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            96 => 
            array (
                'created_at' => NULL,
                'id' => 120,
                'material_id' => 11,
                'quantity' => 100,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            97 => 
            array (
                'created_at' => NULL,
                'id' => 121,
                'material_id' => 14,
                'quantity' => 1,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            98 => 
            array (
                'created_at' => NULL,
                'id' => 122,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 13,
            ),
            99 => 
            array (
                'created_at' => NULL,
                'id' => 123,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 14,
            ),
            100 => 
            array (
                'created_at' => NULL,
                'id' => 124,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 14,
            ),
            101 => 
            array (
                'created_at' => NULL,
                'id' => 125,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 14,
            ),
            102 => 
            array (
                'created_at' => NULL,
                'id' => 126,
                'material_id' => 12,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 14,
            ),
            103 => 
            array (
                'created_at' => NULL,
                'id' => 127,
                'material_id' => 13,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 14,
            ),
            104 => 
            array (
                'created_at' => NULL,
                'id' => 128,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 14,
            ),
            105 => 
            array (
                'created_at' => NULL,
                'id' => 129,
                'material_id' => 1,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 15,
            ),
            106 => 
            array (
                'created_at' => NULL,
                'id' => 130,
                'material_id' => 4,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 15,
            ),
            107 => 
            array (
                'created_at' => NULL,
                'id' => 131,
                'material_id' => 5,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 15,
            ),
            108 => 
            array (
                'created_at' => NULL,
                'id' => 132,
                'material_id' => 12,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 15,
            ),
            109 => 
            array (
                'created_at' => NULL,
                'id' => 133,
                'material_id' => 13,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 15,
            ),
            110 => 
            array (
                'created_at' => NULL,
                'id' => 134,
                'material_id' => 16,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 15,
            ),
            111 => 
            array (
                'created_at' => NULL,
                'id' => 135,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 16,
            ),
            112 => 
            array (
                'created_at' => NULL,
                'id' => 136,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 16,
            ),
            113 => 
            array (
                'created_at' => NULL,
                'id' => 137,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 16,
            ),
            114 => 
            array (
                'created_at' => NULL,
                'id' => 138,
                'material_id' => 12,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 16,
            ),
            115 => 
            array (
                'created_at' => NULL,
                'id' => 139,
                'material_id' => 13,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 16,
            ),
            116 => 
            array (
                'created_at' => NULL,
                'id' => 140,
                'material_id' => 15,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 16,
            ),
            117 => 
            array (
                'created_at' => NULL,
                'id' => 141,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 16,
            ),
            118 => 
            array (
                'created_at' => NULL,
                'id' => 142,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 17,
            ),
            119 => 
            array (
                'created_at' => NULL,
                'id' => 143,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 17,
            ),
            120 => 
            array (
                'created_at' => NULL,
                'id' => 144,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 17,
            ),
            121 => 
            array (
                'created_at' => NULL,
                'id' => 145,
                'material_id' => 12,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 17,
            ),
            122 => 
            array (
                'created_at' => NULL,
                'id' => 146,
                'material_id' => 13,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 17,
            ),
            123 => 
            array (
                'created_at' => NULL,
                'id' => 147,
                'material_id' => 15,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 17,
            ),
            124 => 
            array (
                'created_at' => NULL,
                'id' => 148,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 17,
            ),
            125 => 
            array (
                'created_at' => NULL,
                'id' => 149,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 18,
            ),
            126 => 
            array (
                'created_at' => NULL,
                'id' => 150,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 18,
            ),
            127 => 
            array (
                'created_at' => NULL,
                'id' => 151,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 18,
            ),
            128 => 
            array (
                'created_at' => NULL,
                'id' => 152,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 18,
            ),
            129 => 
            array (
                'created_at' => NULL,
                'id' => 153,
                'material_id' => 12,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 18,
            ),
            130 => 
            array (
                'created_at' => NULL,
                'id' => 154,
                'material_id' => 13,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 18,
            ),
            131 => 
            array (
                'created_at' => NULL,
                'id' => 155,
                'material_id' => 15,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 18,
            ),
            132 => 
            array (
                'created_at' => NULL,
                'id' => 156,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 18,
            ),
            133 => 
            array (
                'created_at' => NULL,
                'id' => 157,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 19,
            ),
            134 => 
            array (
                'created_at' => NULL,
                'id' => 158,
                'material_id' => 4,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 19,
            ),
            135 => 
            array (
                'created_at' => NULL,
                'id' => 159,
                'material_id' => 5,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 19,
            ),
            136 => 
            array (
                'created_at' => NULL,
                'id' => 160,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 19,
            ),
            137 => 
            array (
                'created_at' => NULL,
                'id' => 161,
                'material_id' => 12,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 19,
            ),
            138 => 
            array (
                'created_at' => NULL,
                'id' => 162,
                'material_id' => 13,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 19,
            ),
            139 => 
            array (
                'created_at' => NULL,
                'id' => 163,
                'material_id' => 15,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 19,
            ),
            140 => 
            array (
                'created_at' => NULL,
                'id' => 164,
                'material_id' => 16,
                'quantity' => 20,
                'updated_at' => NULL,
                'used_material_id' => 19,
            ),
            141 => 
            array (
                'created_at' => NULL,
                'id' => 165,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 20,
            ),
            142 => 
            array (
                'created_at' => NULL,
                'id' => 166,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 20,
            ),
            143 => 
            array (
                'created_at' => NULL,
                'id' => 167,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 20,
            ),
            144 => 
            array (
                'created_at' => NULL,
                'id' => 168,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 20,
            ),
            145 => 
            array (
                'created_at' => NULL,
                'id' => 169,
                'material_id' => 15,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 20,
            ),
            146 => 
            array (
                'created_at' => NULL,
                'id' => 170,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 20,
            ),
            147 => 
            array (
                'created_at' => NULL,
                'id' => 171,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 21,
            ),
            148 => 
            array (
                'created_at' => NULL,
                'id' => 172,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 21,
            ),
            149 => 
            array (
                'created_at' => NULL,
                'id' => 173,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 21,
            ),
            150 => 
            array (
                'created_at' => NULL,
                'id' => 174,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 21,
            ),
            151 => 
            array (
                'created_at' => NULL,
                'id' => 175,
                'material_id' => 15,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 21,
            ),
            152 => 
            array (
                'created_at' => NULL,
                'id' => 176,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 21,
            ),
            153 => 
            array (
                'created_at' => NULL,
                'id' => 177,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 22,
            ),
            154 => 
            array (
                'created_at' => NULL,
                'id' => 178,
                'material_id' => 2,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 22,
            ),
            155 => 
            array (
                'created_at' => NULL,
                'id' => 179,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 22,
            ),
            156 => 
            array (
                'created_at' => NULL,
                'id' => 180,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 22,
            ),
            157 => 
            array (
                'created_at' => NULL,
                'id' => 181,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 22,
            ),
            158 => 
            array (
                'created_at' => NULL,
                'id' => 182,
                'material_id' => 15,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 22,
            ),
            159 => 
            array (
                'created_at' => NULL,
                'id' => 183,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 22,
            ),
            160 => 
            array (
                'created_at' => NULL,
                'id' => 184,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 23,
            ),
            161 => 
            array (
                'created_at' => NULL,
                'id' => 185,
                'material_id' => 2,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 23,
            ),
            162 => 
            array (
                'created_at' => NULL,
                'id' => 186,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 23,
            ),
            163 => 
            array (
                'created_at' => NULL,
                'id' => 187,
                'material_id' => 5,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 23,
            ),
            164 => 
            array (
                'created_at' => NULL,
                'id' => 188,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 23,
            ),
            165 => 
            array (
                'created_at' => NULL,
                'id' => 189,
                'material_id' => 15,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 23,
            ),
            166 => 
            array (
                'created_at' => NULL,
                'id' => 190,
                'material_id' => 16,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 23,
            ),
            167 => 
            array (
                'created_at' => NULL,
                'id' => 191,
                'material_id' => 1,
                'quantity' => 4,
                'updated_at' => NULL,
                'used_material_id' => 24,
            ),
            168 => 
            array (
                'created_at' => NULL,
                'id' => 192,
                'material_id' => 2,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 24,
            ),
            169 => 
            array (
                'created_at' => NULL,
                'id' => 193,
                'material_id' => 3,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 24,
            ),
            170 => 
            array (
                'created_at' => NULL,
                'id' => 194,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 24,
            ),
            171 => 
            array (
                'created_at' => NULL,
                'id' => 195,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 24,
            ),
            172 => 
            array (
                'created_at' => NULL,
                'id' => 196,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 24,
            ),
            173 => 
            array (
                'created_at' => NULL,
                'id' => 197,
                'material_id' => 15,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 24,
            ),
            174 => 
            array (
                'created_at' => NULL,
                'id' => 198,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 24,
            ),
            175 => 
            array (
                'created_at' => NULL,
                'id' => 199,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 25,
            ),
            176 => 
            array (
                'created_at' => NULL,
                'id' => 200,
                'material_id' => 2,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 25,
            ),
            177 => 
            array (
                'created_at' => NULL,
                'id' => 201,
                'material_id' => 3,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 25,
            ),
            178 => 
            array (
                'created_at' => NULL,
                'id' => 202,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 25,
            ),
            179 => 
            array (
                'created_at' => NULL,
                'id' => 203,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 25,
            ),
            180 => 
            array (
                'created_at' => NULL,
                'id' => 204,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 25,
            ),
            181 => 
            array (
                'created_at' => NULL,
                'id' => 205,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 25,
            ),
            182 => 
            array (
                'created_at' => NULL,
                'id' => 206,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            183 => 
            array (
                'created_at' => NULL,
                'id' => 207,
                'material_id' => 2,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            184 => 
            array (
                'created_at' => NULL,
                'id' => 208,
                'material_id' => 3,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            185 => 
            array (
                'created_at' => NULL,
                'id' => 209,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            186 => 
            array (
                'created_at' => NULL,
                'id' => 210,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            187 => 
            array (
                'created_at' => NULL,
                'id' => 211,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            188 => 
            array (
                'created_at' => NULL,
                'id' => 212,
                'material_id' => 9,
                'quantity' => 35,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            189 => 
            array (
                'created_at' => NULL,
                'id' => 213,
                'material_id' => 10,
                'quantity' => 150,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            190 => 
            array (
                'created_at' => NULL,
                'id' => 214,
                'material_id' => 11,
                'quantity' => 100,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            191 => 
            array (
                'created_at' => NULL,
                'id' => 215,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 26,
            ),
            192 => 
            array (
                'created_at' => NULL,
                'id' => 216,
                'material_id' => 1,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            193 => 
            array (
                'created_at' => NULL,
                'id' => 217,
                'material_id' => 2,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            194 => 
            array (
                'created_at' => NULL,
                'id' => 218,
                'material_id' => 3,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            195 => 
            array (
                'created_at' => NULL,
                'id' => 219,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            196 => 
            array (
                'created_at' => NULL,
                'id' => 220,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            197 => 
            array (
                'created_at' => NULL,
                'id' => 221,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            198 => 
            array (
                'created_at' => NULL,
                'id' => 222,
                'material_id' => 9,
                'quantity' => 35,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            199 => 
            array (
                'created_at' => NULL,
                'id' => 223,
                'material_id' => 10,
                'quantity' => 150,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            200 => 
            array (
                'created_at' => NULL,
                'id' => 224,
                'material_id' => 11,
                'quantity' => 100,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            201 => 
            array (
                'created_at' => NULL,
                'id' => 225,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 27,
            ),
            202 => 
            array (
                'created_at' => NULL,
                'id' => 227,
                'material_id' => 2,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            203 => 
            array (
                'created_at' => NULL,
                'id' => 228,
                'material_id' => 3,
                'quantity' => 50,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            204 => 
            array (
                'created_at' => NULL,
                'id' => 229,
                'material_id' => 4,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            205 => 
            array (
                'created_at' => NULL,
                'id' => 230,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            206 => 
            array (
                'created_at' => NULL,
                'id' => 231,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            207 => 
            array (
                'created_at' => NULL,
                'id' => 232,
                'material_id' => 9,
                'quantity' => 60,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            208 => 
            array (
                'created_at' => NULL,
                'id' => 233,
                'material_id' => 10,
                'quantity' => 250,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            209 => 
            array (
                'created_at' => NULL,
                'id' => 234,
                'material_id' => 11,
                'quantity' => 80,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            210 => 
            array (
                'created_at' => NULL,
                'id' => 235,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 28,
            ),
            211 => 
            array (
                'created_at' => NULL,
                'id' => 236,
                'material_id' => 1,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            212 => 
            array (
                'created_at' => NULL,
                'id' => 237,
                'material_id' => 2,
                'quantity' => 40,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            213 => 
            array (
                'created_at' => NULL,
                'id' => 238,
                'material_id' => 3,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            214 => 
            array (
                'created_at' => NULL,
                'id' => 239,
                'material_id' => 4,
                'quantity' => 15,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            215 => 
            array (
                'created_at' => NULL,
                'id' => 240,
                'material_id' => 5,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            216 => 
            array (
                'created_at' => NULL,
                'id' => 241,
                'material_id' => 8,
                'quantity' => 10,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            217 => 
            array (
                'created_at' => NULL,
                'id' => 242,
                'material_id' => 9,
                'quantity' => 35,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            218 => 
            array (
                'created_at' => NULL,
                'id' => 243,
                'material_id' => 10,
                'quantity' => 150,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            219 => 
            array (
                'created_at' => NULL,
                'id' => 244,
                'material_id' => 11,
                'quantity' => 100,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
            220 => 
            array (
                'created_at' => NULL,
                'id' => 245,
                'material_id' => 16,
                'quantity' => 25,
                'updated_at' => NULL,
                'used_material_id' => 29,
            ),
        ));
        
        
    }
}