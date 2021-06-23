


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
   
// ROUTE HOMEPAGE
Route::get('/', 'MainController@homepage')
        ->name('homepage');

// ROUTE 'CHI SIAMO'
Route::get('info', 'MainController@infoWebPage')
        ->name('infoWebPage');

// ROUTE FAQ
Route::get('faq' , 'MainController@faq')
        ->name('faq');

// ROUTE DASHBOARD
Route::get('/dashBoard/restaurant', 'HomeController@dashBoard')
-> name('dashBoard');
Route::post('/store/restaurant', 'HomeController@storeRestaurant')
->name('store-restaurant');

// ROUTE MENU RESTAURANT
Route::get('/client/restaurant/{id}', 'MainController@clientRestaurant')
        ->name('clientRestaurant');

        
// ROUTE DEI PRODUCT DEL RISTORANTE
Route::get('/myProduct/{id}' , 'HomeController@myProduct')
        ->name('myProduct');

// ROUTE AGGIUNGI PRODUCT
Route::get('/product/create/{id}', 'HomeController@createProduct')
        -> name('createProduct');
Route::post('/product/store/{id}', 'HomeController@storeProduct')
        ->name('storeProduct');

// ROUTE EDIT PRODUCT
Route::get('/product/edit/{id}', 'HomeController@editProduct')
        ->name('editProduct');
Route::post('/product/update/{id}', 'HomeController@updateProduct')
        ->name('updateProduct');

// ROUTE DELETE PRODUCT
Route::get('/product/delete/{id}' , 'HomeController@deleteProduct')
        ->name('deleteProduct');



        
Route::get('/restaurant/destroyRestaurant/{id}', 'HomeController@destroyRestaurant')
        ->name('destroyRestaurant');













        


