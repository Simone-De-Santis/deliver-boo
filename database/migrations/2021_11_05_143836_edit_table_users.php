<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

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
            // Added columns to the table 'users' already present
            $table->string('activity_name', 100)->after('remember_token');
            $table->string('province', 100)->after('activity_name');
            $table->string('municipality', 100)->nullable()->after('province');
            $table->string('address')->after('municipality');
            $table->string('city', 100)->after('address');
            $table->char('zip', 5)->after('city');
            $table->char('vat', 11)->unique()->after('zip');
            $table->string('telephone', 20)->unique()->nullable()->after('vat');
            $table->text('description')->after('telephone');
            $table->string('url')->nullable()->after('description');
            $table->string('longitude')->nullable()->after('url');
            $table->string('latitude')->nullable()->after('longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Delete the above created columns
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['activity_name', 'province', 'municipality', 'address', 'city', 'zip', 'vat', 'telephone', 'description', 'url', 'longitude', 'latidude']);
        });
    }
}
