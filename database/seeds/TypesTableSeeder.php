<?php

use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        ////Added 'for loop' to generate data within the 'types' table
        for ($i = 0; $i < 20; $i++) {
            $new_type = new Type();
            $new_type->name = $faker->word();
            $new_type->url = $faker->imageUrl(640, 680, 'animals', true);
            $new_type->save();
        }
    }
}
