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
        // array 
        $categories_name = ["Ristorante", "Trattoria", "Pizzeria", "Cinese", "Dolci", "Vegan", "Messicano", "Osteria", "Enoteca", "Giapponese", "Fast Food", "Pub", "Gelateria"];

        foreach ($categories_name as $category) {
            $new_category  = new Category();
            $new_category->name = $category;
            $new_category->url = $faker->imageUrl(640, 680, 'animals', true);
            $new_category->save();
        }
    }
}
