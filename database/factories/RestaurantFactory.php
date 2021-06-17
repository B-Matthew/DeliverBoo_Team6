<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [

        'name'=> $faker -> firstname,
        'address'=> $faker -> streetAddress,
        'telephone'=> $faker -> e164PhoneNumber,
        'p-iva'=> $faker -> swiftBicNumber,
        'img'=> $faker -> word,
    ];
});
        
