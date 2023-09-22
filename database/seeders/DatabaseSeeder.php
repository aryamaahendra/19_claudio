<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Superadmin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
        ]);

        $this->call(SupplierSeeder::class);

        $this->call(ProductMaterialsTableSeeder::class);
        $this->call(RestockedsTableSeeder::class);
        $this->call(MaterialRestockedTableSeeder::class);
        $this->call(UsedMaterialsTableSeeder::class);
        $this->call(UsedMaterialPivotTableSeeder::class);
    }
}
