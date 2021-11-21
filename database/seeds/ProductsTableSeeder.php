<?php



use Illuminate\Database\Seeder;

use Illuminate\Support\Arr;

use App\Models\Product;

use App\Models\Ingredient;

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

        $types_id = Type::pluck('id')->toArray();

        $users_id = User::pluck('id')->toArray();

        $ingredients_id = Ingredient::pluck('id')->toArray();



        // Menù per categoria: Ristorante

        $products_list = [

            [

                "type_id" => 1,

                "name" => "Affettato misto",

                "discount" => 0,

                "price" => 13.00,

                "description" => "Tagliere di salumi toscani e crostini misti",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Selezione di Formaggi",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Tagliere di formagi toscani e confetture",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Carpaccio di tonno",

                "discount" => 0,

                "price" => 18.00,

                "description" => "Carpaccio di tonno fresco con glassa all'aceto balsamico DOP",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Spaghetti allo Scoglio",

                "discount" => 0,

                "price" => 16.00,

                "description" => "Spaghetti quadrati con gamberi, vongole, e astice fresco",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Spaghetti alla Carbonara",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Spaghetti alla carbonara con uova selezionate, pancetta toscana e pepe nero dell'Irlanda macinato a mano",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Pici Cacio e Pepe",

                "discount" => 0,

                "price" => 12.00,

                "description" => "Pici toscani freschi della casa con crema di pecorino romano DOP e pepe fresco macinato",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Grigliata mista",

                "discount" => 0,

                "price" => 28.00,

                "description" => "Grigliata mista di carne con agnello, puntina di maiale e salsiccia, polpetta di vitello e involtino di vitello",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Grigliata mista",

                "discount" => 0,

                "price" => 28.00,

                "description" => "Grigliata mista di carne con agnello, puntina di maiale e salsiccia, polpetta di vitello e involtino di vitello",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Scaloppine ai porcini",

                "discount" => 0,

                "price" => 24.00,

                "description" => "Scaloppine di vitello con crema ai porcini freschi e verdure miste di stagione",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Insalata mista",

                "discount" => 0,

                "price" => 24.00,

                "description" => "Insalata mista con verdure crude e grigliate di stagione",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Frittura di patate",

                "discount" => 0,

                "price" => 24.00,

                "description" => "Patate novelle a dadoni fritte",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Caffè",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Chianti Classico",

                "discount" => 0,

                "price" => 32.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Panzanella",

                "discount" => 0,

                "price" => 7.00,

                "description" => "Pane duro condito con cipolla rossa, pomodorini pakino di stagione, e cetrioli freschi",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Crostini di polenta e funghi porcini",

                "discount" => 0,

                "price" => 8.00,

                "description" => "Polenta arrostita con crema di funghi porcini toscani",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Crostini di fegatini",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Crostini di pane duro con fegatino di cinghile alla Maremmana e olio evo DOP",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Pappardelle al cinghiale",

                "discount" => 0,

                "price" => 18.00,

                "description" => "Pappardelle fatte in casa con ragù di cinghiale",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Zuppa fredda",

                "discount" => 0,

                "price" => 16.00,

                "description" => "Zuppa fredda alla pisana con verdure fresch e farinata di pomodoro e basilico",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Insalata di pollo nostrale",

                "discount" => 0,

                "price" => 20.00,

                "description" => "Insalata di pollo con sott'oli fatti in casa, patate a vapore, pomodorini datterini e cipolla rossa di Tropea",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Piccione in tegame coll'olive",

                "discount" => 0,

                "price" => 22.00,

                "description" => "Piccione preparato a cottura lenta con olive nere e rosse fatte in casa",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Porcellotto alla brace",

                "discount" => 0,

                "price" => 27.00,

                "description" => "Maiale alla brace con glassa di aceto balsamico dop e fonduta di caciocavallo",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Verdure alla brace",

                "discount" => 0,

                "price" => 24.00,

                "description" => "Verdure miste di stagione grigliate con aromi misti",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Fagioli Cannellini",

                "discount" => 0,

                "price" => 14.00,

                "description" => "Fagioli cannellini freschi con olio evo DOP",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Caffè",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Vino della casa",

                "discount" => 0,

                "price" => 22.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "BIANCA",

                "discount" => 0,

                "price" => 7.00,

                "description" => " Mozzarella, olio, origano ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "MARGHERITA",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Pomodoro, mozzarella ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "MARGHERITA",

                "discount" => 0,

                "price" => 7.00,

                "description" => "Pomodoro, mozzarella ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "DOLCE VITA",

                "discount" => 0,

                "price" => 14.00,

                "description" => "Pomodoro, mozzarella, pomodoro a fette, mozzarella a fette, crudo, scaglie",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "REALE",

                "discount" => 0,

                "price" => 12.00,

                "description" => "Pomodorini, mozzarella, ricotta, crudo ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "SAPORITA",

                "discount" => 0,

                "price" => 18.00,

                "description" => "Pomodoro, mozzarella, uovo, prosciutto cotto, carciofini ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "GOLOSA",

                "discount" => 0,

                "price" => 12.00,

                "description" => " Pomodoro, mozzarella, salsiccia, peperoni, cipolla ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "NORDICA",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Pomodoro, mozzarella, porcini, speck, rucola ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "VERDURONA ",

                "discount" => 0,

                "price" => 8.00,

                "description" => "omodoro, mozzarella, melanzane, zucchine, asparagi, pomodorini, radicchio, peperoni, spinaci, mais, piselli ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "DUCALE ",

                "discount" => 0,

                "price" => 18.00,

                "description" => " Pomodoro, mozzarella, melanzane, salsiccia, funghi ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "NCANTESIMO",

                "discount" => 0,

                "price" => 13.00,

                "description" => "Pomodoro, mozzarella, spinaci, ricotta ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "TREVIGIANA",

                "discount" => 0,

                "price" => 12.00,

                "description" => "Pomodoro di bruschetta, mozzarella, funghi, radicchio",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "1 Involtino primavera con germogli di soia",

                "discount" => 0,

                "price" => 3.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "2 Wanton fritti",

                "discount" => 0,

                "price" => 3.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "10 Ravioli al vapore",

                "discount" => 0,

                "price" => 8.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => " Spaghetti di riso alla piastra",

                "discount" => 0,

                "price" => 10.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Spaghetti saltati alla cinese con verdure e carne",

                "discount" => 0,

                "price" => 16.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Gamberoni con salsa chili",

                "discount" => 0,

                "price" => 16.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Pollo ai funghi e bambù",

                "discount" => 0,

                "price" => 12.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Vitello con germogli di soia",

                "discount" => 0,

                "price" => 14.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Verdure miste alla fiamma",

                "discount" => 0,

                "price" => 4.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Germogli di soia saltati",

                "discount" => 0,

                "price" => 6.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Coca cola",

                "discount" => 0,

                "price" => 3.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Sprite",

                "discount" => 0,

                "price" => 3.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => " Yen-men (more cinesi)",

                "discount" => 0,

                "price" => 3.50,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "Lungan (occchio di drago)",

                "discount" => 0,

                "price" => 5.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "Budino di mele con gelato alla cannella",

                "discount" => 0,

                "price" => 7.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "Zabaione semifreddo al marsala salsa caramello caffè",

                "discount" => 0,

                "price" => 5.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "Coppa caffè e cioccolato",

                "discount" => 0,

                "price" => 8.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "Crostatina con frutta crema pasticciera e sorbetto alla frutta",

                "discount" => 0,

                "price" => 5.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "Tortino di cioccolato, banana caramellata e sorbetto di banana",

                "discount" => 0,

                "price" => 6.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "arfait alla liquirizia e menta con salsa limone, gelato all’anice",

                "discount" => 0,

                "price" => 9.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Insalata di valeriana, formaggio veg stagionato e noci",

                "discount" => 0,

                "price" => 7.00,

                "description" => "Insalata greta con formaggio veg stagionato dop e crema di noci",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Sformatino di quinoa",

                "discount" => 0,

                "price" => 8.00,

                "description" => "Sformatino di quinoa con verdure fresche di stagione saltate",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Antipasto Piemonte",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Tofumino al verde, peperone in bagna caoda di alghe, carpaccio di veg-bresaola marinata, affettato tofumé",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Rigatoni Senatore Cappelli alla Carbonara Vegana",

                "discount" => 0,

                "price" => 18.00,

                "description" => "Rigatoni Senatore Cappelli alla Carbonara Vegana preparati con tofu affumicato, panna di soia e curcuma",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Spaghetti di riso alla thailandese",

                "discount" => 0,

                "price" => 16.00,

                "description" => "Spaghetti di riso con verdure, tofu strapazzato, arachidi, peperoncino verde e lime",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Tagliata di seitan marinato in crosta di sesamo",

                "discount" => 0,

                "price" => 20.00,

                "description" => "Tagliata di seitan marinato in crosta di sesamo alla marinatura di senape, succo di barbabietola e mirtillo e vino bianco",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Moussaka di melanzane al ragù di seitan",

                "discount" => 0,

                "price" => 22.00,

                "description" => "Moussaka di melanzane al ragù di seitan accompagnata da insalata greca vegan (pomodori, cetrioli, tofu, cipolle rosse e olive)",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Padellata di carciofi e tofu al tamari affiancata da patate al forno ",

                "discount" => 0,

                "price" => 27.00,

                "description" => "Padellata di carciofi e tofu al tamari affiancata da patate al forno  con guarnizione di granella di pistacchio",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Insalata mista",

                "discount" => 0,

                "price" => 24.00,

                "description" => "Insalate verdi e/o rosse, pomodorini, carote, semi misti",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Caffè",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Succo di arance rosse",

                "discount" => 0,

                "price" => 22.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Huevos Divorciados Special",

                "discount" => 0,

                "price" => 5.00,

                "description" => "Due uova all'occhio di bue, troppo diverse per stare insieme. A coprire, la salsa roja e la salsa tomatillos.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Cazuelita de Camarones al Ajillo",

                "discount" => 0,

                "price" => 9.00,

                "description" => "Gamberi grigi dell'Ecuador* cotti nella salsa all'aglio e peperoncino dello Chef. Leggermente piccante.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Alitas de Pollo",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Alette di pollo prima scelta, marinate e stufate, servite ricoperte di un generoso strato di salsa barbecue dello Chef. Semi di sesamo a guarnire",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Quesadilla (4 pezzi)",

                "discount" => 0,

                "price" => 19.00,

                "description" => "Tortilla di farina biancacotta su piastra, piegata a mezza luna e con ripieno a scelta ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Tacos (2 pezzi)",

                "discount" => 0,

                "price" => 12.00,

                "description" => "uno dei simboli culinari della cucina di strada messicana, abilmente rivisitato dal nostro Chef.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Chile Relleno",

                "discount" => 0,

                "price" => 20.00,

                "description" => "Peperoni ripieni di piccadillo ricoperti di salsa green Mexican. Leggermente piccanti",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Papas Fritas",

                "discount" => 0,

                "price" => 14.00,

                "description" => "Spicchi di patate scelte dallo chef, fritte e speziate ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Burritos",

                "discount" => 0,

                "price" => 14.00,

                "description" => "tortillas di grano arrotolata con ripieno a scelta.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Caffè",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Coca Cola",

                "discount" => 0,

                "price" => 4.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Carpaccio di manzo alla brace, caprino, capperi, olive e tartufo",

                "discount" => 0,

                "price" => 17.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Patè di fegatini, gelatina di Vin Santo e composta di cipolle",

                "discount" => 0,

                "price" => 8.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Tagliere toscano con salumi misti del Casentino, pecorini biologici di Pienza, crostini",

                "discount" => 0,

                "price" => 19.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Tagliatelle flambè al tartufo fresco in crosta di Grana Padano",

                "discount" => 0,

                "price" => 28.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Pici al sugo di granchio",

                "discount" => 0,

                "price" => 22.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Bistecca alla fiorentina con fagioli all'uccelletto",

                "discount" => 0,

                "price" => 28.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Coscia arrosto di agnello biologico di Pienza e purea di patate",

                "discount" => 0,

                "price" => 22.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Baccalà, purea di patate al Vin Santo, tartufo e carciofi croccanti",

                "discount" => 0,

                "price" => 25.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Verdure alla griglia",

                "discount" => 0,

                "price" => 14.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Fagioli con ferdure fritte",

                "discount" => 0,

                "price" => 9.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Caffè",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Vino della casa",

                "discount" => 0,

                "price" => 20.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "Tiramisù",

                "discount" => 0,

                "price" => 12.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Crostini toscani con olio al tartufo",

                "discount" => 0,

                "price" => 17.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Ravioli in salsa tartufata",

                "discount" => 0,

                "price" => 18.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Risotto zafferano e salsiccia",

                "discount" => 0,

                "price" => 24.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Spaghetti al cavolo nero e crumble di pancetta",

                "discount" => 0,

                "price" => 28.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Petto d‘anatra all’arancia",

                "discount" => 0,

                "price" => 29.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Tagliata con porri e Roquefort",

                "discount" => 0,

                "price" => 24.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Ceci all’olio",

                "discount" => 0,

                "price" => 4.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Fagioli all’uccelletto",

                "discount" => 0,

                "price" => 9.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Patate arrosto",

                "discount" => 0,

                "price" => 5.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Caffè",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Chardonnay Alto Adige “Kettmeir” ’17",

                "discount" => 0,

                "price" => 20.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Muller Turgau Alto Adige “Kettmeir” ’17",

                "discount" => 0,

                "price" => 20.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Gewurztraminer Trentino “Marco Donati” ’17",

                "discount" => 0,

                "price" => 29.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Riesling Oltrepò Pavese “Calatroni” ’17",

                "discount" => 0,

                "price" => 27.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Vernaccia di San Gimignano “Rialto” ’16",

                "discount" => 0,

                "price" => 32.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Passerina delle Marche “Ciù Ciù” ’16",

                "discount" => 0,

                "price" => 45.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "EDAMAME",

                "discount" => 0,

                "price" => 4.00,

                "description" => "Fagioli di soia giapponese",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "MOYASHI",

                "discount" => 0,

                "price" => 8.00,

                "description" => "Germogli di soia alla piastra",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "WAKAME SUONOMONO",

                "discount" => 0,

                "price" => 4.00,

                "description" => "Alghe giapponesi in aceto di riso",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "WSPICY WAKAME",

                "discount" => 0,

                "price" => 6.00,

                "description" => "Alghe giapponesi agro-piccanti",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "GARI",

                "discount" => 0,

                "price" => 3.00,

                "description" => "Zenzero in salamoia",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "RISO BIANCO",

                "discount" => 0,

                "price" => 8.00,

                "description" => "Ciotola di riso bianco e sesamo",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "RISO FRUTTI",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Riso alla piastra con frutti di mare",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "PAGHETTI UDON POLLO",

                "discount" => 0,

                "price" => 15.00,

                "description" => "Spaghetti di grano tenero con pollo in salsa teriyaki",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "SAKE MAKI",

                "discount" => 0,

                "price" => 9.00,

                "description" => "Riso e salmone",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "KAPPA MAKI",

                "discount" => 0,

                "price" => 4.00,

                "description" => "Riso e cetriolo",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "SUSHI SAKURA",

                "discount" => 0,

                "price" => 14.00,

                "description" => "9 Nigiri, 3 Hosomaki e 2 Uramaki ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "ASHIMI MATSU",

                "discount" => 0,

                "price" => 24.00,

                "description" => "16 filetti misti di pesce crudo",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "CHIRASHI MORIAWASE",

                "discount" => 0,

                "price" => 14.00,

                "description" => " Riso con filetti misti di pesce crudo",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Fagioli all’uccelletto",

                "discount" => 0,

                "price" => 9.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "KANI SALAD",

                "discount" => 0,

                "price" => 14.00,

                "description" => "Granchio e code di gambero su letto di insalata mista",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "SASHIMI SALD",

                "discount" => 0,

                "price" => 11.00,

                "description" => "iletti di pesce crudo su letto di insalata mista",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Caffè",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Kentonyck",

                "discount" => 0,

                "price" => 12.00,

                "description" => "Doppio hamburger di bovino alla marchigiana, Doppio Bacon, Doppio Cheddar, Salsa Burger",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Piombo",

                "discount" => 0,

                "price" => 9.00,

                "description" => "Hamburger, gorgonzola, patate al forno, insalata, prosciutto cotto alla piastra e maionese",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Rocky mountain",

                "discount" => 0,

                "price" => 15.00,

                "description" => "Due hamburger,doppia fontina,doppio bacon,insalata,pomodoro,cipolla cruda di tropea,funghi trifolati,salsa bbq,salsa all’aglio",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "bismarkcanyon",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Hamburger di carne bovina marchigiana lattuga pomodoro ketchup maionese bacon e uovo occhio di bue",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Hat creek luis",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Hamburger bacon fontina cipolla cotta insalata pomodoro ketchup maionese e tabasco",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Colt",

                "discount" => 0,

                "price" => 15.00,

                "description" => "Lardo di colonnata, gamberetti, aceto balsamico, radicchio. Arrotolato in piadina",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Pedro",

                "discount" => 0,

                "price" => 12.50,

                "description" => "Lardo di colonnata, insalata, funghi trifolati e olio tartufato",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Missouri",

                "discount" => 0,

                "price" => 13.00,

                "description" => "Bacon, mozzarella, patate gratinate e maionese",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Duello",

                "discount" => 0,

                "price" => 12.00,

                "description" => "Bacon e uovo strapazzato",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Tribù",

                "discount" => 0,

                "price" => 11.00,

                "description" => "Arrosto di tacchino, capperi e salsa tonnata",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Birra Nastro Azzurro",

                "discount" => 0,

                "price" => 3.50,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Churros",

                "discount" => 0,

                "price" => 3.00,

                "description" => "Churros messicani serviti a scelta con,Nutella,Succo d’acero,Miele o Fragola",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Gelati marca bindi",

                "discount" => 0,

                "price" => 2.00,

                "description" => "Coppette panna cioccolato panna amarena  Coni panna cioccolato panna amarena Stecchi vari gusti Biscotto bigusto",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Carpaccio di bresaola",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Bresaola, rucola, scaglie di grana, accompagnato con pan pizza caldo. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Bruschetta casareccia (",

                "discount" => 0,

                "price" => 12.00,

                "description" => "Pane di semola di grano duro alla brace,  pomodoro, olio EVO, origano, basilico. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Mozzarelline panate ",

                "discount" => 0,

                "price" => 8.00,

                "description" => "AMozzarelline fresche con impanatura dorata. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 1,

                "name" => "Figliata",

                "discount" => 0,

                "price" => 16.00,

                "description" => "Figliata di latte vaccino Campana, Mortadella, pesto di pistacchio, granella di pistacchio.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Biancaneve ",

                "discount" => 0,

                "price" => 8.00,

                "description" => "Pizza con mozzarella fior di latte, olio EVO. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Primavera",

                "discount" => 0,

                "price" => 8.00,

                "description" => "Pizza con pomodoro, mozzarella fior di latte, prosciutto cotto, olio EVO.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Toscanaccia",

                "discount" => 0,

                "price" => 12.00,

                "description" => "Pizza con mozzarella fior di latte, salsiccia scomposta, rucola, funghi freschi marinati, olio EVO. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 2,

                "name" => "Tricolore",

                "discount" => 0,

                "price" => 14.00,

                "description" => "Pizza con omodorino fresco, ricotta al pesto, mozzarella fior di latte, basilico, noci. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Involtini di carne / pollo alla Messinese",

                "discount" => 0,

                "price" => 19.00,

                "description" => "Carne di manzo, pangrattato, formaggio a pasta filata, formaggio pepato, prezzemolo, parmigiano, olio EVO, sale, pepe. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Misto involtini e salsiccia",

                "discount" => 0,

                "price" => 4.00,

                "description" => "Carne di manzo, pangrattato, formaggio a pasta filata, formaggio pepato, prezzemolo, parmigiano, olio EVO, carne di maiale, pomodoro, formaggio, scarola, finocchietto selvatico, sale, pepe.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "La tagliata",

                "discount" => 0,

                "price" => 24.00,

                "description" => "Angus Irlandese di circa 350 gr., con marinata di funghi freschi, rucola e scaglie di grana.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Maxi polpetta",

                "discount" => 0,

                "price" => 23.00,

                "description" => "Polpetta da 300 gr. cotta alla brace, servita con patate rustiche, insalata mista e salse. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 3,

                "name" => "Cube Roll di Angus",

                "discount" => 0,

                "price" => 14.00,

                "description" => " l cuore pregiato delle migliori costate cotto alla brace e servito con patate fritte rustiche aromatizzate.",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Preziosa",

                "discount" => 0,

                "price" => 9.00,

                "description" => "Bresaola, rucola, mais, funghi trifolati, scaglie di grana, pomodorini Pachino. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 4,

                "name" => "Leggera",

                "discount" => 0,

                "price" => 7.00,

                "description" => "Fesa di tacchino, lattuga romana, rucola, pomodorini confit, olive nere, crostini di pane, salsa caesar. ",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Acqua 1l",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Caffè",

                "discount" => 0,

                "price" => 2.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Doc 15 33 Cl. (birrificio Messina)",

                "discount" => 0,

                "price" => 4.50,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Fisher 66 Cl.",

                "discount" => 0,

                "price" => 5.00,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 6,

                "name" => "Du Demon 33 Cl.",

                "discount" => 0,

                "price" => 3.50,

                "description" => "",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "CROCCANTE",

                "discount" => 0,

                "price" => 10.00,

                "description" => "Gelato al latte, panna montata, croccante",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "NOCI",

                "discount" => 0,

                "price" => 8.00,

                "description" => "Gelato al latte,panna montata, noci",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "BATIDA DE COCCO",

                "discount" => 0,

                "price" => 8.50,

                "description" => "Gelato al cocco, panna montata, Blu Curacao, Batida de Coco",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "BIS CIOCCOLATO",

                "discount" => 0,

                "price" => 6.50,

                "description" => "Gelato al latte, panna montata, frappè al cioccolato",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "EIS CAFFÈ ",

                "discount" => 0,

                "price" => 6.00,

                "description" => "Gelato al latte, panna montata, caffè fredd",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "COPPA VODKA ",

                "discount" => 0,

                "price" => 9.50,

                "description" => "Gelato al limone, vodka Belvedere, limone,",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "COPPA COCCO",

                "discount" => 0,

                "price" => 8.50,

                "description" => "Gelato al cocco, panna montata, liquore Blu Curacao, cocco a scaglie",

                "is_available" => 1,

                "url" => "",

            ],

            [

                "type_id" => 5,

                "name" => "COPPA AFTER EIGHT ",

                "discount" => 0,

                "price" => 8.00,

                "description" => "Gelato al latte e menta, panna montata, topping menta, After eigh",

                "is_available" => 1,

                "url" => "",

            ],



        ];



        foreach ($products_list as $product_list) {

            for ($i = 0; $i < 10; $i++) {
                $new_product = new Product();

                $new_product->user_id = Arr::random($users_id);

                $new_product->type_id = $product_list["type_id"];

                $new_product->name = $product_list["name"];

                $new_product->discount  = $product_list["discount"];

                $new_product->price =  $product_list["price"];

                $new_product->description = $product_list["description"];

                $new_product->is_available = $product_list["is_available"];

                $new_product->url = $product_list["url"];

                $new_product->save();
            }



            // Attaching ingredient id to pivot table

            for ($x = 0; $x < 10; $x++) {

                $new_product->ingredients()->attach(Arr::random($ingredients_id));
            }
        }
    }
}
