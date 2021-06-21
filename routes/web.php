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

// HOMEPAGE
Route::get('/', 'MainController@homepage')
        ->name('homepage');

// CHI SIAMO
Route::get('info', 'MainController@infoWebPage')
        ->name('infoWebPage');

// FAQ
Route::get('faq' , 'MainController@faq')
        ->name('faq');

// SEZIONE DASHBOARD
Route::get('/dashBoard/restaurant', 'HomeController@dashBoard')
-> name('dashBoard');
Route::post('/store/restaurant', 'HomeController@store')
->name('store');


Route::get('restaurant/{id}', 'MainController@restaurant')
->name('restaurant');
Route::get('product/{id}', 'MainController@product')
->name('product');
Route::get('show', 'MainController@show')
->name('show');

Route::get('/createProduct/product', 'HomeController@createProduct')
-> name('createProduct');
Route::post('/storeProduct/product', 'HomeController@storeProduct')
->name('storeProduct');

Route::get('/restaurant/edit/{id}', 'HomeController@edit')
->name('edit');
Route::post('/restaurant/update/{id}', 'HomeController@update')
->name('update');

Route::get('/restaurant/destroyRestaurant/{id}', 'HomeController@destroyRestaurant')
->name('destroyRestaurant');
Route::post('/restaurant/store', 'HomeController@storeRestaurateur')
->name('storeRestaurant');










