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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// route for admin
Route::get('/home', 'HomeController@index')->name('home');

// route for subcategories people
Route::get('/barman', 'HomeController@barman')->name('barman');
Route::get('/servitoros', 'HomeController@servitoros')->name('servitoros');
Route::get('/mageiras', 'HomeController@mageiras')->name('mageiras');

// route for subcategories store
Route::get('/trapezi', 'TrapeziController@index')->name('trapezi.index');
Route::get('/trapezi/{id}', 'TrapeziController@show')->name('trapezi.show');
Route::get('/paraggelia', 'ParaggeliaController@index')->name('paraggelia.index');
Route::get('/paraggelia/{trapezi_id}', 'ParaggeliaController@show')->name('paraggelia.show');
Route::get('/proion', 'HomeController@proionta')->name('proionta');
