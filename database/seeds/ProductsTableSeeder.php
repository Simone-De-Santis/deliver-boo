<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\User;
use App\Models\Type;
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

        /* Selecting id column, then with pluck we get back the collection with the ids array inside, but we 
        just need the array itself, so we get it with toArray() */
        $types_id = Type::pluck('id')->toArray();
        $user_id = User::pluck('id')->toArray();

        //Added 'for loop' to generate data within the 'products' table
        for ($i = 0; $i < 20; $i++) {
            $new_product = new Product();

            $new_product->user_id = Arr::random($user_id);
            $new_product->type_id = Arr::random($types_id);
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
