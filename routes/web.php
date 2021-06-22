


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
Route::post('/store/restaurant', 'HomeController@storeRestaurant')
->name('store-restaurant');

// SEZIONE MENU RESTAURANT
Route::get('/client/restaurant/{id}', 'MainController@clientRestaurant')
        ->name('clientRestaurant');

        
// SEZIONE MYFOODS
Route::get('/myProduct/{id}' , 'HomeController@myProduct')
        ->name('myProduct');

// SEZIONE ADD PRODUCT
Route::get('/createProduct/{id}', 'HomeController@createProduct')
-> name('createProduct');
Route::post('/storeProduct/product/{id}', 'HomeController@storeProduct')
->name('storeProduct');

// SEZIONE EDIT PRODUCT
Route::get('/product/editProduct/{id}', 'HomeController@editProduct')
->name('editProduct');
Route::post('/restaurant/update/', 'HomeController@updateProduct')
->name('updateProduct');







Route::get('/restaurant/destroyRestaurant/{id}', 'HomeController@destroyRestaurant')
->name('destroyRestaurant');









        


