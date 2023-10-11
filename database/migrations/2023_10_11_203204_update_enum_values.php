<?php

use App\Helpers\UnitMeasureEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $array = UnitMeasureEnum::all();
        $string = "'" . implode("','", $array) . "'";
        DB::statement("ALTER TABLE `product_materials` CHANGE `unit_measure` `unit_measure` ENUM(" . $string . ") CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
