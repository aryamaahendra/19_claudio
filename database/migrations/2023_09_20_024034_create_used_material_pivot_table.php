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
        Schema::create('used_material_pivot', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('product_materials');

            $table->unsignedBigInteger('used_material_id');
            $table->foreign('used_material_id')->references('id')->on('used_materials');

            $table->unsignedInteger('quantity');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('used_material_pivot', function (Blueprint $table) {
            $table->dropForeign(['material_id']);
            $table->dropForeign(['used_material_id']);
        });

        Schema::dropIfExists('used_material_pivot');
    }
};
