<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $categories =[
            [
                'name' => 'Cinese',
            ],  
            [
                'name' => 'Giapponese',
            ],
            [
                'name' => 'Italiano',
            ],
            [
                'name' => 'Messicano',
            ],
            [
                'name' => 'Pizzeria',
            ],
            [
                'name' => 'Fast-Food',
            ],
            [
                'name' => 'Greco',
            ],
            [
                'name' => 'Indiano',
            ],
            [
                'name' => 'Paninoteca',
            ],
            [
                'name' => 'Vegetariano',
            ],
        ];
        
        $index = $faker -> unique() -> numberBetween(0,9);
        $category = $categories[$index];
        return [
        
       'name' => $category['name'],
        ];
});
