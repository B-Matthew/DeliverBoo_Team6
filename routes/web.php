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

// Route::get('/chi_siamo', 'MainController@chi_siamo')
// ->name('chi_siamo');

// Route::get('restaurateur', 'MainController@restaurateur')
// ->name('restaurateur');

// Route::get('/create/restaurateur', 'HomeController@create')
// -> name('create');
// Route::post('/store/restaurateur', 'HomeController@store')
// ->name('store');

// Route::get('/restaurateur/edit/{id}', 'HomeController@edit')
// ->name('restaurateur-edit');
// Route::post('/restaurateur/update/{id}', 'HomeController@update')
// ->name('restaurateur-update');

// Route::get('/restaurateur/delete/{id}', 'HomeController@delete')
// ->name('delete');
// Route::post('/restaurateur/store', 'MainController@storeRestaurateur')
// ->name('store-restaurateur');

// HOMEPAGE
Route::get('/', 'MainController@homepage')
        ->name('homepage');

// CHI SIAMO
Route::get('info', 'MainController@infoWebPage')
        ->name('infoWebPage');

Route::post('filter/{name}' , 'MainController@filterSearch')
        ->name('filterSearch');

