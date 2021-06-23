<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Restaurant;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $products = [
            [
                'name' => 'Spaghetti alla carbonara',
                'ingredients' => 'Pasta , uova , pancetta , pecorino',
                'description' => 'Ricetta classica della cucina',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 18,
            ],
            [
                'name' => 'Uramaki di salmone',
                'ingredients' => 'Riso , alga nori , salmone , avocado ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 17,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'La regina delle pizze',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 16,
            ],
            [
                'name' => 'Hamburger con Patatine',
                'ingredients' => 'Pane , Hamburger , Cheddar , salse ',
                'description' => 'Hamburger di Fassona con cheddar e salsa a piacere, contorno di patatine country',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 15,
            ],
            [
                'name' => 'Tacos della casa',
                'ingredients' => 'Tacos , Salsiccia , Peperoni , Paprika dolce ',
                'description' => 'Tacos tradizionali messicane',
                'type' => 'Antipasto',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 14,
            ],
            [
                'name' => 'Pollo al curry',
                'ingredients' => 'Pollo , Curry , Senape',
                'description' => 'Pollo al curry con riso bianco',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 13,
            ],
            [
                'name' => 'Lasange alla bolognese',
                'ingredients' => 'Pasta , Ragù , Besciamella ',
                'description' => 'Lasagna alla bolognese classica',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 12,
            ],
            [
                'name' => 'Samosa',
                'ingredients' => 'Patate , formaggio , manzo , cipolle ',
                'description' => "piatto indiano diffuso e amato in tutta l'India, è un antipasto croccante e sfizioso.",
                'type' => 'Antipasto',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 11,
            ],
            [
                'name' => 'Panino New York',
                'ingredients' => 'Salsiccia , porchetta di Ariccia , provola , funghi e salsa',
                'description' => 'Il nostro panino della casa',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 10,
            ],
            [
                'name' => 'Bufala e Pomodorini',
                'ingredients' => 'Pomodoro , Mozzarella di Bufala DOP, Basilico , pomodorini',
                'description' => 'Pizza estiva con Bufala e Pomodorini , un classico della cucina italiana' ,
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 9,
            ],
            [
                'name' => 'Tonno in crosta di pistacchi',
                'ingredients' => 'Tonno , Pistacchi , Limone',
                'description' => 'Tonno in crosta di pistacchi con contorno di verdure grigliate',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 8,
            ],
            [
                'name' => 'Tartar di salmone',
                'ingredients' => 'Salmone , Semi di sesamo , Salsa Guacamole ',
                'description' => 'Tartar di salmone tagliata al coltello su un letto di guacamole',
                'type' => 'Antipasto',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 7,
            ],
            [
                'name' => 'Tagliere di salumi e formaggi',
                'ingredients' => 'Salumi della casa , formaggi nostrani',
                'description' => 'I nostri salumi e formaggi a KM 0 accompagnate da maramellate miste',
                'type' => 'Antipasto',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 6,
            ],
            [
                'name' => 'Spaghetti al pomodoro',
                'ingredients' => 'Pasta , Salsa di pomodoro , Basilico ',
                'description' => 'Un primo piatto per adulti e bambini',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 5,
            ],
            [
                'name' => 'Melanzane alla parmigiana',
                'ingredients' => 'Melanzane , Mozzarella , Pomodoro ',
                'description' => 'Melanzane alla parmigiana come da ricetta casalinga',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 4,
            ],
            [
                'name' => 'Souvlaky',
                'ingredients' => 'Polpa di agnello , Lardo di maiale , limone',
                'description' => 'Spiedini di agnello alla greca con contorno di patate e salsa allo yogurt greco',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 3,
            ],
            [
                'name' => 'Orecchia di elefante',
                'ingredients' => 'Lonza di maiale , sale grosso , rucola , pomodorini',
                'description' => 'Cotoletta di maiale con contorno di patatine fritte',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 4,
            ],
            [
                'name' => 'Ravioloni ripieni di polpo e burrata',
                'ingredients' => 'Ravioli , polpo , burrata ',
                'description' => 'Ravioli fatti in casa con ripieno di polpo e burrata DOP',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 4,
            ],
            [
                'name' => 'Chicken Burger',
                'ingredients' => 'Pollo , Cheddar , Salse a piacere , verdure grigiate ',
                'description' => 'Hamburger di pollo con formaggio Cheddar e contorno di patatine',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 4,
            ],
            [
                'name' => 'Branzino alla mediterranea',
                'ingredients' => 'Branzino , pomodorini , olive taggiasche ',
                'description' => 'Branzino sfumato al vino bianco con pomodorini ed olive taggiasche, contorno di verdure miste',
                'type' => 'Secondo',
                'price' => mt_rand(1 * 2, 40 * 2) / 2,
                'availability'  => true,
                'restaurant_id' => 4,
            ],
        ];

        foreach ($products as $key => $product) {
            DB::table('products')->insert($product);
        }
    }
}

