<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Added 'for loop' to generate data within the 'categories' table
        for ($i = 0; $i < 20; $i++) {
            $new_category = new Category();

            $new_category->name = $faker->word();
            $new_category->url = $faker->imageUrl(640, 680, 'animals', true);

            $new_category->save();
        }
    }
}
