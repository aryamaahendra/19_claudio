<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('product_materials', function (Blueprint $table) {
            $table->after('in_stock', function () use ($table) {
                $table->unsignedFloat('rataRataKebutuhan')->default(0.0);
                $table->unsignedInteger('safetyStock')->default(0);
                $table->unsignedInteger('minimumStock')->default(0);
                $table->unsignedInteger('maximumStock')->default(0);
                $table->unsignedInteger('Q')->default(0);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_materials', function (Blueprint $table) {
            $table->dropColumn('rataRataKebutuhan');
            $table->dropColumn('safetyStock');
            $table->dropColumn('minimumStock');
            $table->dropColumn('maximumStock');
            $table->dropColumn('Q');
        });
    }
};
