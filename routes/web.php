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
Route::get('/customerTable', 'CustomerTableController@index')->name('customer_table.index');
Route::get('/customerTable/{id}', 'CustomerTableController@show')->name('customer_table.show');
Route::get('/customerTable/{id}/order', 'OrderController@show')->name('order.show');
Route::post('/order', 'OrderController@store')->name('order.store');
Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/product', 'HomeController@productta')->name('productta');
