<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            // Creation of 'orders' table with relevant data
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('address');
            $table->string('city', 50);
            $table->char('zip', 5);
            $table->string('phone_number', 20);
            $table->float('discount', 4, 2)->unsigned();
            $table->float('total_price', 7, 2)->unsigned();
            $table->text('message_to_users')->nullable();
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
        // Delete the 'orders' table
        Schema::dropIfExists('orders');
    }
}
