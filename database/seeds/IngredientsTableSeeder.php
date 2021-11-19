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
        // Import ingredients list
        $ingredients_list = [
            [
                "name" => "Arista",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni rosse"
            ],
            [
                "name" => "Carne macinata",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni rosse"
            ],
            [
                "name" => "Filetto",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni rosse"
            ],
            [
                "name" => "Manzo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni rosse"
            ],
            [
                "name" => "Ossobuco",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni rosse"
            ],
            [
                "name" => "Agnello",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Alette di pollo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Coniglio ",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Cosce di pollo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Petto di pollo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Salsicce",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Tacchino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Vitello",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Costolette",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Avena",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Mais",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Cous Cous",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Orzo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Quinoa",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Seitan",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Riso",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredientshttps://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Riso soffiato",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Aragosta",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Astice",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Calamari",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Cozze",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Frutti di mare",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Gamberetti",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Gamberoni",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Capesante",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Moscardini",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Polipetti",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Polpa di granchio",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Polpo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Tartufi di maere",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Volgole",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Seppioline",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Scampi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Dado",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Glucosio",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Lecitina",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Coloranti alimentari",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Fiochhi di patate",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Alloro",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Aneto",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Basilico",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Coriandolo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Ginepro",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Erba cipollina",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Menta",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Prezzemolo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Origano",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Salvia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Rosmarino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Timo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Farina 0",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina 00",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di canapa",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di ceci",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di cocco",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di farro",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di mandorle",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di segale",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di riso",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina integrale",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Semola",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Fecola di patate",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Farine"
            ],
            [
                "name" => "Brie",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Caciocavallo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Caprino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Cheddar",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Crescenza",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Emmental",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Feta",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Fontina",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Asiago",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Gruviera",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Gorgonzola",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Grana",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Galbanino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Mascarpone",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Pecorino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Parmigiano",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Robiola",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Sottilette",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Scamorza",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Stracchino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Taleggio",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Tofu",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Barbabietole rosse",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Carote",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Funghi secchi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Funghi porcini",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Funghi champignon",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Patate dolci",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Tartufo nero",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Tartufo bianco",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Ravanelli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Besciamella",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Burro",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Fiocchi di latte",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Latte",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Gelato",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Latte di cocco",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Latte di mandorla",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Latte di soia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Panna acida",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Panna da cucina",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Panna per dolci",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Yogurt",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Yogurt greco",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Burrata",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latticini"
            ],
            [
                "name" => "Mozzarella",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latticini"
            ],
            [
                "name" => "Provola",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latticini"
            ],
            [
                "name" => "Ricotta",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Latticini"
            ],
            [
                "name" => "Ceci",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Legumi"
            ],
            [
                "name" => "Fagioli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Legumi"
            ],
            [
                "name" => "Fave",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Legumi"
            ],
            [
                "name" => "Lenticchie",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Legumi"
            ],
            [
                "name" => "Lupini",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Legumi"
            ],
            [
                "name" => "Piselli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Legumi"
            ],
            [
                "name" => "Soia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Legumi"
            ],
            [
                "name" => "Taccole",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Legumi"
            ],
            [
                "name" => "Aceto balsamico",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Burro di arachidi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Ketchup",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Maionese",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Nero di seppia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Olio di oliva",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Olio di semi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Sale",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Salsa di soia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Senape",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Tahina",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Aglio",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Asparagi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Carciofi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cavolfiore",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cavolini di Bruxelles",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cavolini di Bruxelles",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cavolo rosso",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cetrioli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cime di rapa",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cipolla di Tropea",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Finocchi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Friggitelli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Melenzane",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Peperoni",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Pomodori",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Pomodorini",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Porro",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Scalogno",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Sedano",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Zucca",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Zucchine",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Bucatini",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Cannelloni",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Fettuccine",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Fusilli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Gnocchi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Lasagne",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Linguine",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Orecchiette",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Paccheri",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Pappardelle",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Penne",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Scialatielli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Spaghetti",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Tagliatelle",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Trofie",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Vermicelli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pasta"
            ],
            [
                "name" => "Acciughe",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Baccalà",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Cernia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Merluzzo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Orata",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Pesce persico",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Pesce spada",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Rana pescatrice",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Rombo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Salmone",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Spigola",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Surimi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Tonno",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Triglie",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Trota salmonata",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce"
            ],
            [
                "name" => "Alici",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce azzurro"
            ],
            [
                "name" => "Pesce spatola",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce azzurro"
            ],
            [
                "name" => "Sarde",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce azzurro"
            ],
            [
                "name" => "Sgombro",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Pesce azzurro"
            ],
            [
                "name" => "Biscotti",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pancarrè",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pane",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pane carasau",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pane per tramezzini",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Panini",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Piadina",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pangrattato",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pane arabo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Bacon",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Bresaola",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Capicollo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Culatello",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Fesa di tacchino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Guanciale",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Mortadella",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Pancetta",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Prosciutto cotto",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Prosciutto crudo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Salame",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Speck",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Wurstel",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Salumi"
            ],
            [
                "name" => "Capperi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Germogli di soia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di chia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di papavero",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di lino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di finocchio",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di sesamo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di zucca",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Anice",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Cannella",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Chiodi di garofano",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Curcuma",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Curry",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Liquirizia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Noce moscata",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Paprica",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Pepe",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Pepe rosa",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Peperoncino",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Vaniglia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Zafferano",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Zenzero",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Spezie"
            ],
            [
                "name" => "Albumi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Uova"
            ],
            [
                "name" => "Bottarga",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Uova"
            ],
            [
                "name" => "Caviale",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Uova"
            ],
            [
                "name" => "Tuorli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Uova"
            ],
            [
                "name" => "Uova",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Uova"
            ],
            [
                "name" => "Uova di quaglia",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Uova"
            ],
            [
                "name" => "Uova di struzzo",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Uova"
            ],
            [
                "name" => "Albumi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Uova"
            ],
            [
                "name" => "Alga kombu",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Alga spirulina",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Alga wakame",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Alghe",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Bietole",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Broccoli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Cavolo nero",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Fiori di zucca",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Cicoria",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Fiori di zucca",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Friarelli",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Lattuga",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Ortica",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Radicchio",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Rucola",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Verza",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Spinaci",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Verdure"
            ],
            [
                "name" => "Canditi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Cetriolini",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Concentrato di pomodoro",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Lievito di birra",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Passata di pomodoro",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Pomodori secchi",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Marzapane",
                "url" => "https://images.squarespace-cdn.com/content/v1/518ea9e4e4b0eb1ecff22776/1480450074024-LTJO255BUA2ODWGZDNJI/Quality+Ingredients",
                "classification" => "Prodotti alimentari"
            ],
        ];

        foreach ($ingredients_list as $ingredient_item) {
            $new_ingredient = new Ingredient();
            $new_ingredient->name = $ingredient_item['name'];
            $new_ingredient->url = $ingredient_item['url'];
            $new_ingredient->classification = $ingredient_item['classification'];
            $new_ingredient->save();
        }
    }
}
