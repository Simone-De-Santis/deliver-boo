<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //Creation of 'categories' table with relevant data

            $table->string('activity_name', 100);
            $table->string('province', 100);
            $table->string('municipality', 100)->nullable();
            $table->string('address');
            $table->string('city', 100);
            $table->char('zip', 5);
            $table->char('vat', 11)->unique();
            $table->string('telephone', 20)->unique()->nullable();
            $table->text('description');
            $table->string('url')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latidude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //

            $table->dropColumn(['activity_name', 'province', 'municipality', 'address', 'city', 'zip', 'vat', 'telephone', 'description', 'url', 'longitude', 'latidude']);
        });
    }
}
