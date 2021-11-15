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
        // Types list
        $types = [
            [
                "name" => "Antipasti",
                "url" => "https://e7.pngegg.com/pngimages/739/955/png-clipart-antipasto-italian-cuisine-vegetarian-cuisine-bresaola-hors-d-oeuvre-salad.png"
            ],
            [
                "name" => "Primi",
                "url" => "https://cdn.imgbin.com/14/16/13/imgbin-pasta-bolognese-sauce-italian-cuisine-lasagne-wine-wine-round-white-ceramic-bowl-WSqe1VaDEMqiBGxVpYmrPkaGY.jpg"
            ],
            [
                "name" => "Secondi",
                "url" => "https://www.prontointavola-gourmet.com/assets/uploads/arrosto.png"
            ],
            [
                "name" => "Contorni",
                "url" => "https://banner2.cleanpng.com/20200102/ex/transparent-salad-5e0dca2732a3a9.8466030215779620232074.jpg"
            ],
            [
                "name" => "Bevande",
                "url" => "http://www.distributori-automatici-bevande.it/wp-content/uploads/2018/07/bevande.png"
            ],
        ];
        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->name = $type["name"];
            $new_type->url = $type["url"];
            $new_type->save();
        }
    }
}
