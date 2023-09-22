<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RestockedsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('restockeds')->delete();
        
        \DB::table('restockeds')->insert(array (
            0 => 
            array (
                'code' => 'RSTK-1695211055',
                'created_at' => '2023-09-20 11:57:35',
                'date' => '2021-06-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 1,
                'updated_at' => '2023-09-20 15:54:09',
            ),
            1 => 
            array (
                'code' => 'RSTK-1695211578',
                'created_at' => '2023-09-20 12:06:18',
                'date' => '2021-09-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 2,
                'updated_at' => '2023-09-20 12:06:18',
            ),
            2 => 
            array (
                'code' => 'RSTK-1695211822',
                'created_at' => '2023-09-20 12:10:22',
                'date' => '2021-12-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 3,
                'updated_at' => '2023-09-20 12:10:22',
            ),
            3 => 
            array (
                'code' => 'RSTK-1695212026',
                'created_at' => '2023-09-20 12:13:46',
                'date' => '2022-03-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 4,
                'updated_at' => '2023-09-20 12:13:46',
            ),
            4 => 
            array (
                'code' => 'RSTK-1695212178',
                'created_at' => '2023-09-20 12:16:18',
                'date' => '2022-06-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 5,
                'updated_at' => '2023-09-20 12:16:18',
            ),
            5 => 
            array (
                'code' => 'RSTK-1695212452',
                'created_at' => '2023-09-20 12:20:52',
                'date' => '2022-09-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 6,
                'updated_at' => '2023-09-20 12:20:52',
            ),
            6 => 
            array (
                'code' => 'RSTK-1695212571',
                'created_at' => '2023-09-20 12:22:51',
                'date' => '2022-11-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 7,
                'updated_at' => '2023-09-20 12:22:51',
            ),
            7 => 
            array (
                'code' => 'RSTK-1695212722',
                'created_at' => '2023-09-20 12:25:22',
                'date' => '2023-01-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 8,
                'updated_at' => '2023-09-20 12:25:22',
            ),
            8 => 
            array (
                'code' => 'RSTK-1695213043',
                'created_at' => '2023-09-20 12:30:43',
                'date' => '2023-03-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 9,
                'updated_at' => '2023-09-20 12:30:43',
            ),
            9 => 
            array (
                'code' => 'RSTK-1695213354',
                'created_at' => '2023-09-20 12:35:54',
                'date' => '2023-05-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 10,
                'updated_at' => '2023-09-20 12:35:54',
            ),
            10 => 
            array (
                'code' => 'RSTK-1695213450',
                'created_at' => '2023-09-20 12:37:30',
                'date' => '2023-07-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 11,
                'updated_at' => '2023-09-20 12:37:30',
            ),
            11 => 
            array (
                'code' => 'RSTK-1695213669',
                'created_at' => '2023-09-20 12:41:09',
                'date' => '2023-09-01 00:00:00',
                'deleted_at' => NULL,
                'id' => 12,
                'updated_at' => '2023-09-20 12:41:09',
            ),
        ));
        
        
    }
}