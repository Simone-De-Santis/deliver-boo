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
                "url" => "",
                "classification" => "Carni rossi"
            ],
            [
                "name" => "Carne macinata",
                "url" => "",
                "classification" => "Carni rossi"
            ],
            [
                "name" => "Filetto",
                "url" => "",
                "classification" => "Carni rossi"
            ],
            [
                "name" => "Manzo",
                "url" => "",
                "classification" => "Carni rossi"
            ],
            [
                "name" => "Ossobuco",
                "url" => "",
                "classification" => "Carni rossi"
            ],
            [
                "name" => "Agnello",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Alette di pollo",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Coniglio ",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Cosce di pollo",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Petto di pollo",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Salsicce",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Tacchino",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Vitello",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Costolette",
                "url" => "",
                "classification" => "Carni bianche"
            ],
            [
                "name" => "Avena",
                "url" => "",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Mais",
                "url" => "",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Cous Cous",
                "url" => "",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Orzo",
                "url" => "",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Quinoa",
                "url" => "",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Seitan",
                "url" => "",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Riso",
                "url" => "",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Riso soffiato",
                "url" => "",
                "classification" => "Cereali e derivati"
            ],
            [
                "name" => "Aragosta",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Astice",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Calamari",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Cozze",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Frutti di mare",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Gamberetti",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Gamberoni",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Capesante",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Moscardini",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Polipetti",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Polpa di granchio",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Polpo",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Tartufi di maere",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Volgole",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Seppioline",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Scampi",
                "url" => "",
                "classification" => "Crostacei e molluschi"
            ],
            [
                "name" => "Dado",
                "url" => "",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Glucosio",
                "url" => "",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Lecitina",
                "url" => "",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Coloranti alimentari",
                "url" => "",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Fiochhi di patate",
                "url" => "",
                "classification" => "Additivi alimentari"
            ],
            [
                "name" => "Alloro",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Aneto",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Basilico",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Coriandolo",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Ginepro",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Erba cipollina",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Menta",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Prezzemolo",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Origano",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Salvia",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Rosmarino",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Timo",
                "url" => "",
                "classification" => "Erbe aromatiche"
            ],
            [
                "name" => "Farina 0",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina 00",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di canapa",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di ceci",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di cocco",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di farro",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di mandorle",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di segale",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina di riso",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Farina integrale",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Semola",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Fecola di patate",
                "url" => "",
                "classification" => "Farine"
            ],
            [
                "name" => "Brie",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Caciocavallo",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Caprino",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Cheddar",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Crescenza",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Emmental",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Feta",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Fontina",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Asiago",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Gruviera",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Gorgonzola",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Grana",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Galbanino",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Mascarpone",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Pecorino",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Parmigiano",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Robiola",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Sottilette",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Scamorza",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Stracchino",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Taleggio",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Tofu",
                "url" => "",
                "classification" => "Formaggi"
            ],
            [
                "name" => "Barbabietole rosse",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Carote",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Funghi secchi",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Funghi porcini",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Funghi champignon",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Patate dolci",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Tartufo nero",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Tartufo bianco",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Ravanelli",
                "url" => "",
                "classification" => "Funghi e tuberi"
            ],
            [
                "name" => "Besciamella",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Burro",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Fiocchi di latte",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Latte",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Gelato",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Latte di cocco",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Latte di mandorla",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Latte di soia",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Panna acida",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Panna da cucina",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Panna per dolci",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Yogurt",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Yogurt greco",
                "url" => "",
                "classification" => "Latte e derivati"
            ],
            [
                "name" => "Burrata",
                "url" => "",
                "classification" => "Latticini"
            ],
            [
                "name" => "Mozzarella",
                "url" => "",
                "classification" => "Latticini"
            ],
            [
                "name" => "Provola",
                "url" => "",
                "classification" => "Latticini"
            ],
            [
                "name" => "Ricotta",
                "url" => "",
                "classification" => "Latticini"
            ],
            [
                "name" => "Ceci",
                "url" => "",
                "classification" => "Legumi"
            ],
            [
                "name" => "Fagioli",
                "url" => "",
                "classification" => "Legumi"
            ],
            [
                "name" => "Fave",
                "url" => "",
                "classification" => "Legumi"
            ],
            [
                "name" => "Lenticchie",
                "url" => "",
                "classification" => "Legumi"
            ],
            [
                "name" => "Lupini",
                "url" => "",
                "classification" => "Legumi"
            ],
            [
                "name" => "Piselli",
                "url" => "",
                "classification" => "Legumi"
            ],
            [
                "name" => "Soia",
                "url" => "",
                "classification" => "Legumi"
            ],
            [
                "name" => "Taccole",
                "url" => "",
                "classification" => "Legumi"
            ],
            [
                "name" => "Aceto balsamico",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Burro di arachidi",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Ketchup",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Maionese",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Nero di seppia",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Olio di oliva",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Olio di semi",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Sale",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Salsa di soia",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Senape",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Tahina",
                "url" => "",
                "classification" => "Oli e condimenti"
            ],
            [
                "name" => "Aglio",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Asparagi",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Carciofi",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cavolfiore",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cavolini di Bruxelles",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cavolini di Bruxelles",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cavolo rosso",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cetrioli",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cime di rapa",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Cipolla di Tropea",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Finocchi",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Friggitelli",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Melenzane",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Peperoni",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Pomodori",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Pomodorini",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Porro",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Scalogno",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Sedano",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Zucca",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Zucchine",
                "url" => "",
                "classification" => "Ortaggi"
            ],
            [
                "name" => "Bucatini",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Cannelloni",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Fettuccine",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Fusilli",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Gnocchi",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Lasagne",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Linguine",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Orecchiette",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Paccheri",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Pappardelle",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Penne",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Scialatielli",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Spaghetti",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Tagliatelle",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Trofie",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Vermicelli",
                "url" => "",
                "classification" => "Pasta"
            ],
            [
                "name" => "Acciughe",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Baccalà",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Cernia",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Merluzzo",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Orata",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Pesce persico",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Pesce spada",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Rana pescatrice",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Rombo",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Salmone",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Spigola",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Surimi",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Tonno",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Triglie",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Trota salmonata",
                "url" => "",
                "classification" => "Pesce"
            ],
            [
                "name" => "Alici",
                "url" => "",
                "classification" => "Pesce azzurro"
            ],
            [
                "name" => "Pesce spatola",
                "url" => "",
                "classification" => "Pesce azzurro"
            ],
            [
                "name" => "Sarde",
                "url" => "",
                "classification" => "Pesce azzurro"
            ],
            [
                "name" => "Sgombro",
                "url" => "",
                "classification" => "Pesce azzurro"
            ],
            [
                "name" => "Biscotti",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pancarrè",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pane",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pane carasau",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pane per tramezzini",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Panini",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Piadina",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pangrattato",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Pane arabo",
                "url" => "",
                "classification" => "Prodotti da forno"
            ],
            [
                "name" => "Bacon",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Bresaola",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Capicollo",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Culatello",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Fesa di tacchino",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Guanciale",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Mortadella",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Pancetta",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Prosciutto cotto",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Prosciutto crudo",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Salame",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Speck",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Wurstel",
                "url" => "",
                "classification" => "Salumi"
            ],
            [
                "name" => "Capperi",
                "url" => "",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Germogli di soia",
                "url" => "",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di chia",
                "url" => "",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di papavero",
                "url" => "",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di lino",
                "url" => "",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di finocchio",
                "url" => "",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di sesamo",
                "url" => "",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Semi di zucca",
                "url" => "",
                "classification" => "Semi e germogli"
            ],
            [
                "name" => "Anice",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Cannella",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Chiodi di garofano",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Curcuma",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Curry",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Liquirizia",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Noce moscata",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Paprica",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Pepe",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Pepe rosa",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Peperoncino",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Vaniglia",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Zafferano",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Zenzero",
                "url" => "",
                "classification" => "Spezie"
            ],
            [
                "name" => "Albumi",
                "url" => "",
                "classification" => "Uova"
            ],
            [
                "name" => "Bottarga",
                "url" => "",
                "classification" => "Uova"
            ],
            [
                "name" => "Caviale",
                "url" => "",
                "classification" => "Uova"
            ],
            [
                "name" => "Tuorli",
                "url" => "",
                "classification" => "Uova"
            ],
            [
                "name" => "Uova",
                "url" => "",
                "classification" => "Uova"
            ],
            [
                "name" => "Uova di quaglia",
                "url" => "",
                "classification" => "Uova"
            ],
            [
                "name" => "Uova di struzzo",
                "url" => "",
                "classification" => "Uova"
            ],
            [
                "name" => "Albumi",
                "url" => "",
                "classification" => "Uova"
            ],
            [
                "name" => "Alga kombu",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Alga spirulina",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Alga wakame",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Alghe",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Bietole",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Broccoli",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Cavolo nero",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Fiori di zucca",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Cicoria",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Fiori di zucca",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Friarelli",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Lattuga",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Ortica",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Radicchio",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Rucola",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Verza",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Spinaci",
                "url" => "",
                "classification" => "Verdure"
            ],
            [
                "name" => "Canditi",
                "url" => "",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Cetriolini",
                "url" => "",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Concentrato di pomodoro",
                "url" => "",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Lievito di birra",
                "url" => "",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Passata di pomodoro",
                "url" => "",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Pomodori secchi",
                "url" => "",
                "classification" => "Prodotti alimentari"
            ],
            [
                "name" => "Marzapane",
                "url" => "",
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
