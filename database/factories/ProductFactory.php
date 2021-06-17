<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        
        'name' => $faker ->firstname,
        'ingredients' => $faker -> word ."," .$faker -> word ."," .$faker -> word ."," .$faker -> word,
        'description' => $faker -> sentence,
        'type' => $faker -> word,
        'price' => $faker ->randomFloat(2, 1, 50),
        'availability' => $faker ->numberBetween(0,1),
    ];
});
        
