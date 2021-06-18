<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/logged', 'HomeController@loggedPage')
->name('logged');

Route::get('restaurant/{id}', 'MainController@restaurant')
->name('restaurant');
Route::get('show', 'MainController@show')
->name('show');

Route::get('/create/restaurant', 'HomeController@create')
-> name('create');
Route::post('/store/restaurant', 'HomeController@store')
->name('store');

Route::get('/restaurant/edit/{id}', 'HomeController@edit')
->name('edit');
Route::post('/restaurant/update/{id}', 'HomeController@update')
->name('update');

Route::get('/restaurant/destroyRestaurant/{id}', 'HomeController@destroyRestaurant')
->name('destroyRestaurant');
Route::post('/restaurant/store', 'HomeController@storeRestaurateur')
->name('storeRestaurant');

// HOMEPAGE
Route::get('/', 'MainController@homepage')
        ->name('homepage');

// CHI SIAMO
Route::get('info', 'MainController@infoWebPage')
        ->name('infoWebPage');
