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

Route::get('/', 'User\ProdukController@index');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produk', 'ProdukController@index')->name('produk');
Route::get('produk-list', 'ProdukController@listProduk')->name('produk-list');
Route::get('/addProduk', 'ProdukController@create')->name('addProduk');
Route::post('/storeProduk', 'ProdukController@store')->name('storeProduk'); 
Route::get('/editProduk/{id}', 'ProdukController@edit')->name('editProduk'); 
Route::post('/updateProduk', 'ProdukController@update')->name('updateProduk');
Route::get('/deleteProduk/{id}', 'ProdukController@destroy')->name('deleteProduk'); 

Route::get('/order', 'OrderController@index')->name('order');
Route::get('/editOrder/{id}', 'OrderController@edit')->name('editorder');
Route::post('/updateOrder', 'OrderController@update')->name('updateOrder');
Route::get('/deleteOrder/{id}', 'OrderController@destroy')->name('deleteOrder');

Route::get('/listUser', 'UserController@index')->name('listUser');
Route::get('/editUser/{id}', 'UserController@edit')->name('editUser');
Route::post('/updateUser', 'UserController@update')->name('updateUser');
Route::get('/deleteUser/{id}', 'UserController@destroy')->name('deleteUser');


Route::get('/listProduk', 'User\ProdukController@index')->name('listProduk');
Route::get('/pilihProduk/{id}', 'User\ProdukController@detail')->name('pilihProduk');

Route::post('/addOrder', 'User\OrderController@store')->name('addOrder');
Route::get('/informasiOrder', 'User\OrderController@index')->name('informasiOrder');
