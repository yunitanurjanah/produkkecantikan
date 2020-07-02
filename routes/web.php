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


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produk', 'ProdukController@index')->middleware('auth')->name('produk');
Route::get('produk-list', 'ProdukController@listProduk')->name('produk-list');
Route::get('/addProduk', 'ProdukController@create')->name('addProduk');
Route::post('/storeProduk', 'ProdukController@store')->name('storeProduk'); 
Route::get('/editProduk/{id}', 'ProdukController@edit')->name('editProduk'); 
Route::post('/updateProduk', 'ProdukController@update')->name('updateProduk');
Route::get('/deleteProduk/{id}', 'ProdukController@destroy')->name('deleteProduk'); 

Route::get('/order', 'OrderController@index')->middleware('auth')->name('order');
Route::get('/order/{id}', 'OrderController@edit')->middleware('auth')->name('editorder');
Route::post('/updateOrder', 'OrderController@update')->name('updateOrder');

Route::get('/listUser', 'UserController@index')->middleware('auth')->name('listUser');
Route::get('/editUser/{id}', 'UserController@edit')->middleware('auth')->name('editUser');
Route::post('/updateUser', 'UserController@update')->middleware('auth')->name('updateUser');
Route::get('/deleteUser/{id}', 'UserController@destroy')->middleware('auth')->name('deleteUser');


Route::get('/listProduk', 'User\ProdukController@index')->name('listProduk');
Route::get('/pilihProduk/{id}', 'User\ProdukController@detail')->name('pilihProduk');

Route::post('/addOrder', 'User\OrderController@store')->name('addOrder');
Route::get('/informasiOrder', 'User\OrderController@index')->name('informasiOrder');
