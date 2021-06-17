<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> firstname,
        'lastname' => $faker -> lastname,
        'address' => $faker -> streetAddress,
        'email' => $faker -> freeEmail, 
    ];
});
