<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Added 'for loop' to generate data within the 'products' table
        for ($i = 0; $i < 20; $i++) {
            $new_product = new Product();

            $new_product->name = $faker->word();
            $new_product->discount  = $faker->randomFloat(2, 0, 99);
            $new_product->price = $faker->randomFloat(2, 0, 99);
            $new_product->description = $faker->paragraph(4);
            $new_product->is_available = $faker->boolean();
            $new_product->url = $faker->imageUrl(640, 680, 'animals', true);

            $new_product->save();
        }
    }
}
