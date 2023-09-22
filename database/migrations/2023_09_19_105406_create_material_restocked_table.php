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
        Schema::create('material_restocked', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('product_materials');

            $table->unsignedBigInteger('restocked_id');
            $table->foreign('restocked_id')->references('id')->on('restockeds');

            $table->unsignedInteger('quantity');
            $table->unsignedInteger('unit_price');
            $table->unsignedInteger('total_price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('material_restocked', function (Blueprint $table) {
            $table->dropForeign(['material_id']);
            $table->dropForeign(['restocked_id']);
        });

        Schema::dropIfExists('material_restocked');
    }
};
