<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_product', function (Blueprint $table) {
            $table->id();
            //// Foreign key link to 'product_id'
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            //// Foreign key link to 'ingredient_id'
            $table->foreignId('ingredient_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //// Delete the 'ingredient_product' table
        Schema::dropIfExists('ingredient_product');
    }
}
