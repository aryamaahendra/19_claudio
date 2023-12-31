<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsedMaterialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('used_materials')->delete();
        
        \DB::table('used_materials')->insert(array (
            0 => 
            array (
                'code' => 'USML-1695223572',
                'created_at' => '2023-09-20 15:26:12',
                'date' => '2021-08-31 00:00:00',
                'id' => 1,
                'updated_at' => '2023-09-22 07:05:06',
            ),
            1 => 
            array (
                'code' => 'USML-1695223717',
                'created_at' => '2023-09-20 15:28:37',
                'date' => '2021-11-30 00:00:00',
                'id' => 2,
                'updated_at' => '2023-09-22 07:08:43',
            ),
            2 => 
            array (
                'code' => 'USML-1695223848',
                'created_at' => '2023-09-20 15:30:48',
                'date' => '2022-02-28 00:00:00',
                'id' => 3,
                'updated_at' => '2023-09-22 07:14:28',
            ),
            3 => 
            array (
                'code' => 'USML-1695223920',
                'created_at' => '2023-09-20 15:32:00',
                'date' => '2022-05-31 00:00:00',
                'id' => 4,
                'updated_at' => '2023-09-22 07:20:41',
            ),
            4 => 
            array (
                'code' => 'USML-1695223999',
                'created_at' => '2023-09-20 15:33:19',
                'date' => '2022-08-31 00:00:00',
                'id' => 5,
                'updated_at' => '2023-09-22 07:23:14',
            ),
            5 => 
            array (
                'code' => 'USML-1695224088',
                'created_at' => '2023-09-20 15:34:48',
                'date' => '2022-10-31 00:00:00',
                'id' => 6,
                'updated_at' => '2023-09-22 10:12:03',
            ),
            6 => 
            array (
                'code' => 'USML-1695224174',
                'created_at' => '2023-09-20 15:36:14',
                'date' => '2022-12-31 00:00:00',
                'id' => 7,
                'updated_at' => '2023-09-22 07:42:31',
            ),
            7 => 
            array (
                'code' => 'USML-1695224334',
                'created_at' => '2023-09-20 15:38:54',
                'date' => '2023-02-28 00:00:00',
                'id' => 8,
                'updated_at' => '2023-09-22 07:45:12',
            ),
            8 => 
            array (
                'code' => 'USML-1695224485',
                'created_at' => '2023-09-20 15:41:25',
                'date' => '2023-04-30 00:00:00',
                'id' => 9,
                'updated_at' => '2023-09-22 08:03:36',
            ),
            9 => 
            array (
                'code' => 'USML-1695224588',
                'created_at' => '2023-09-20 15:43:08',
                'date' => '2023-06-30 00:00:00',
                'id' => 10,
                'updated_at' => '2023-09-22 10:07:38',
            ),
            10 => 
            array (
                'code' => 'USML-1695225318',
                'created_at' => '2023-09-20 15:55:18',
                'date' => '2023-08-31 00:00:00',
                'id' => 13,
                'updated_at' => '2023-09-22 10:06:24',
            ),
            11 => 
            array (
                'code' => 'USML-1695366394',
                'created_at' => '2023-09-22 07:06:34',
                'date' => '2021-07-31 00:00:00',
                'id' => 14,
                'updated_at' => '2023-09-22 07:06:34',
            ),
            12 => 
            array (
                'code' => 'USML-1695366474',
                'created_at' => '2023-09-22 07:07:54',
                'date' => '2021-06-30 00:00:00',
                'id' => 15,
                'updated_at' => '2023-09-22 07:07:54',
            ),
            13 => 
            array (
                'code' => 'USML-1695366597',
                'created_at' => '2023-09-22 07:09:57',
                'date' => '2021-10-31 00:00:00',
                'id' => 16,
                'updated_at' => '2023-09-22 07:09:57',
            ),
            14 => 
            array (
                'code' => 'USML-1695366672',
                'created_at' => '2023-09-22 07:11:12',
                'date' => '2021-09-30 00:00:00',
                'id' => 17,
                'updated_at' => '2023-09-22 07:11:12',
            ),
            15 => 
            array (
                'code' => 'USML-1695366963',
                'created_at' => '2023-09-22 07:16:03',
                'date' => '2022-01-31 00:00:00',
                'id' => 18,
                'updated_at' => '2023-09-22 07:16:03',
            ),
            16 => 
            array (
                'code' => 'USML-1695367059',
                'created_at' => '2023-09-22 07:17:39',
                'date' => '2021-12-31 00:00:00',
                'id' => 19,
                'updated_at' => '2023-09-22 07:17:39',
            ),
            17 => 
            array (
                'code' => 'USML-1695367277',
                'created_at' => '2023-09-22 07:21:17',
                'date' => '2022-04-30 00:00:00',
                'id' => 20,
                'updated_at' => '2023-09-22 07:21:17',
            ),
            18 => 
            array (
                'code' => 'USML-1695367327',
                'created_at' => '2023-09-22 07:22:07',
                'date' => '2022-03-31 00:00:00',
                'id' => 21,
                'updated_at' => '2023-09-22 07:22:07',
            ),
            19 => 
            array (
                'code' => 'USML-1695367465',
                'created_at' => '2023-09-22 07:24:25',
                'date' => '2022-07-31 00:00:00',
                'id' => 22,
                'updated_at' => '2023-09-22 07:24:25',
            ),
            20 => 
            array (
                'code' => 'USML-1695367524',
                'created_at' => '2023-09-22 07:25:24',
                'date' => '2022-06-30 00:00:00',
                'id' => 23,
                'updated_at' => '2023-09-22 07:25:24',
            ),
            21 => 
            array (
                'code' => 'USML-1695368427',
                'created_at' => '2023-09-22 07:40:27',
                'date' => '2022-09-30 00:00:00',
                'id' => 24,
                'updated_at' => '2023-09-22 10:12:01',
            ),
            22 => 
            array (
                'code' => 'USML-1695368654',
                'created_at' => '2023-09-22 07:44:14',
                'date' => '2022-11-30 00:00:00',
                'id' => 25,
                'updated_at' => '2023-09-22 07:44:14',
            ),
            23 => 
            array (
                'code' => 'USML-1695368852',
                'created_at' => '2023-09-22 07:47:32',
                'date' => '2023-01-31 00:00:00',
                'id' => 26,
                'updated_at' => '2023-09-22 07:47:32',
            ),
            24 => 
            array (
                'code' => 'USML-1695369909',
                'created_at' => '2023-09-22 08:05:09',
                'date' => '2023-03-31 00:00:00',
                'id' => 27,
                'updated_at' => '2023-09-22 08:05:09',
            ),
            25 => 
            array (
                'code' => 'USML-1695370040',
                'created_at' => '2023-09-22 08:07:20',
                'date' => '2023-05-31 00:00:00',
                'id' => 28,
                'updated_at' => '2023-09-22 10:07:41',
            ),
            26 => 
            array (
                'code' => 'USML-1695370127',
                'created_at' => '2023-09-22 08:08:47',
                'date' => '2023-07-31 00:00:00',
                'id' => 29,
                'updated_at' => '2023-09-22 10:06:21',
            ),
        ));
        
        
    }
}