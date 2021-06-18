<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    $restaurants = [
        [
         'name' => 'Old Wild West',
         'address' => 'via Pulcinella, 21',
         'city' => 'Roma',
         'telephone' => '+393467932251',
         'pIva' => 'ciao',
         'img'  => 'img1.png',
         'user_id' => 2,
        ],
        [
         'name' => 'King Arthur',
         'address' => 'Via Carlo Pirzio Biroli, 119',
         'city' => 'Roma',
         'telephone' => '+393438659751',
         'pIva' => 'ciao',
         'img'  => 'img2.png',
         'user_id' => 3,
        ],
        [
         'name' => 'Fantastico',
         'address' => 'Via di Bravetta, 778',
         'city' => 'Milano',
         'telephone' => '+393498375653',
         'pIva' => 'ciao',
         'img'  => 'img3.png',
         'user_id' => 3,
        ],
        [
         'name' => 'Cielo',
         'address' => 'Via della Torre Clementina, 154',
         'city' => 'Torino',
         'telephone' => '+393433487623',
         'pIva' => 'ciao',
         'img'  => 'img4.png',
         'user_id' => 4,
        ],
        [
         'name' => 'El Pueblo',
         'address' => 'Via Giacinto de Vecchi Pieralice, 34',
         'city' => 'Firenze',
         'telephone' => '+393409826574',
         'pIva' => 'ciao',
         'img'  => 'img5.png',
         'user_id' => 4,
        ],
        [
         'name' => 'La Punta Expendio de Agave',
         'address' => 'Via Santa Cecilia, 8',
         'city' => 'Firenze',
         'telephone' => '+393469486756',
         'pIva' => 'ciao',
         'img'  => 'img6.png',
         'user_id' => 1,
        ],
        [
         'name' => 'Ristorante Cracco',
         'address' => 'Corso Vittorio Emanuele II',
         'city' => 'Milano',
         'telephone' => '+3934756473641',
         'pIva' => 'ciao',
         'img'  => 'img7.png',
         'user_id' => 3,
        ],
        [
         'name' => 'Villa Crespi',
         'address' => 'Via F, Via Fulcieri Paulucci de Calboli, 5',
         'city' => 'Novara',
         'telephone' => '+393352346656',
         'pIva' => 'ciao',
         'img'  => 'img8.png',
         'user_id' => 2,
        ],
        [
         'name' => 'Verde Pistacchio',
         'address' => 'Via Ostiense, 181',
         'city' => 'Roma',
         'telephone' => '+393423396012',
         'pIva' => 'ciao',
         'img'  => 'img9.png',
         'user_id' => 2,
        ],
        [
         'name' => 'Orto Verde Goloso',
         'address' => 'Via Giuseppe Gioachino Belli, 142',
         'city' => 'Genova',
         'telephone' => '+393469454756',
         'pIva' => 'ciao',
         'img'  => 'img10.png',
         'user_id' => 1,
        ],
        [
         'name' => 'Ilios',
         'address' => 'Via Gabriello Chiabrera, 114/120',
         'city' => 'Napoli',
         'telephone' => '+393469423059',
         'pIva' => 'ciao',
         'img'  => 'img11.png',
         'user_id' => 4,
        ],
        [
         'name' => 'Acropolis',
         'address' => 'Via di S. Francesco a Ripa, 104',
         'city' => 'Roma',
         'telephone' => '+39394758172',
         'pIva' => 'ciao',
         'img'  => 'img12.png',
         'user_id' => 2,
        ],
        [
         'name' => 'Potter Pizza',
         'address' => 'Viale dei Colli Portuensi, 346',
         'city' => 'Colleverde',
         'telephone' => '+393947258172',
         'pIva' => 'ciao',
         'img'  => 'img13.png',
         'user_id' => 3,
        ],
        [
         'name' => 'Alice Pizza',
         'address' => 'Circonvallazione Gianicolense, 278',
         'city' => 'Potenza',
         'telephone' => '+39334948391',
         'pIva' => 'ciao',
         'img'  => 'img14.png',
         'user_id' => 4,
        ],
        [
         'name' => 'Sushi San',
         'address' => 'Via Nettunense Km. 22,300',
         'city' => 'Lecco',
         'telephone' => '+39334912391',
         'pIva' => 'ciao',
         'img'  => 'img15.png',
         'user_id' => 1,
        ],
        [
         'name' => 'Sakura Sushi',
         'address' => 'Piazza Alessandria, 11',
         'city' => 'Como',
         'telephone' => '+39334386391',
         'pIva' => 'ciao',
         'img'  => 'img16.png',
         'user_id' => 2,
        ],
        [
         'name' => 'Kamasutra',
         'address' => 'Piazza Gio Cademartori, 34',
         'city' => 'Venezia',
         'telephone' => '+393343863921',
         'pIva' => 'ciao',
         'img'  => 'img17.png',
         'user_id' => 3,
        ],
        [
         'name' => 'Taj Mahal',
         'address' => 'Via Palestro, 6',
         'city' => 'Pordenone',
         'telephone' => '+393343604934',
         'pIva' => 'ciao',
         'img'  => 'img18.png',
         'user_id' => 1,
        ],
        [
         'name' => 'Saloon Del Panino',
         'address' => 'Via Nunzio, 10',
         'city' => 'Salerno',
         'telephone' => '+393654504934',
         'pIva' => 'ciao',
         'img'  => 'img19.png',
         'user_id' => 1 ,
        ],
        [
         'name' => "Pork'n roll",
         'address' => 'Via Garibalidi, 6',
         'city' => 'Roma',
         'telephone' => '+393309897434',
         'pIva' => 'ciao',
         'img'  => 'img20.png',
         'user_id' => 2,
        ],
    ];
    
    $index = $faker -> unique() -> numberBetween(0,19);
    $restaurant = $restaurants[$index];
    return [

        'name'=> $restaurant['name'],
        'address'=> $restaurant['address'],
        'city' => $restaurant['city'],
        'telephone'=> $restaurant['telephone'],
        'pIva'=> $restaurant['pIva'],
        'img'=> $restaurant['img'],
        'user_id' => $restaurant['user_id'],
    ];
});
        
