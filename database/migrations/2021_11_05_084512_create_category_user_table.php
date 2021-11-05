<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_user', function (Blueprint $table) {

            $table->id();

            // Foreign key link to 'category_id'
            $table->unsignedBigInteger('category_id');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            // Foreign key link to 'user_id'
            $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_user', function (Blueprint $table) {
            //
            Schema::dropIfExists('category_user');
        });
    }
}
