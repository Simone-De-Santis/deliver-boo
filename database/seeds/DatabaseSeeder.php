<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class, IngredientsTableSeeder::class, CategoriesTableSeeder::class, TypesTableSeeder::class, OrdersTableSeeder::class, ProductsTableSeeder::class,]);
    }
}
