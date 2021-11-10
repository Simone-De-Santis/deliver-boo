<?php

use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use Faker\Generator as Faker;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        ////Added 'for loop' to generate data within the 'ingredients' table
        for ($i = 0; $i < 20; $i++) {
            $new_ingredient = new Ingredient();
            $new_ingredient->name = $faker->word();
            $new_ingredient->url = $faker->imageUrl(640, 680, 'animals', true);
            $new_ingredient->save();
        }
    }
}
