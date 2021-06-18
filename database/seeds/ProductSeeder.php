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
                'name' => 'Pasta alla carbonara',
                'ingredients' => 'Pasta , uova , pancetta , caprino , panna ',
                'description' => 'Ricetta classica della cucina romana rivisitata dal nostro Chef',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 18,
            ],
            [
                'name' => 'Uramaki di salmone',
                'ingredients' => 'Riso , alga nori , salmone , avocado ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 17,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 16,
            ],
            [
                'name' => 'Hamburger con Patatine',
                'ingredients' => 'Pane , Hamburger , Cheddar , salse ',
                'description' => 'Hamburger di Fassona con cheddar e salsa a piacere, contorno di patatine country',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 15,
            ],
            [
                'name' => 'Tacos della casa',
                'ingredients' => 'Tacos , Salsiccia , Peperoni , Paprika dolce ',
                'description' => 'Tacos tradizionali messicane',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 14,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 13,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 12,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 11,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 10,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 9,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 8,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 7,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 6,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 5,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 4,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 3,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 2,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 19,
            ],
            [
                'name' => 'Margherita',
                'ingredients' => 'Pomodoro , Mozzarella , Basilico ',
                'description' => 'Uramaki di salmone classico',
                'type' => 'Primo',
                'price' => mt_rand(1 * 2, 50 * 2) / 2,
                'availability'  => rand(0,1),
                'restaurant_id' => 20,
            ],
        ];

        foreach ($products as $key => $product) {
            DB::table('products')->insert($product);
        }
    }
}

