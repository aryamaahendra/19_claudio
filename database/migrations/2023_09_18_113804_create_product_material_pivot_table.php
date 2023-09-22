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
        Schema::create('product_material_pivot', function (Blueprint $table) {
            $table->id();

            $table->unsignedSmallInteger('material_used');

            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('product_materials');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_material_pivot', function (Blueprint $table) {
            $table->dropForeign(['material_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('product_material_pivot');
    }
};
