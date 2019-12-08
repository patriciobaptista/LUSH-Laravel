<?php

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


Route::view('/', 'index');

Route::view('/nosotros', 'about');

Route::resource('/destinos', 'ProductsController');

Route::get('/carrito', 'CartController@index');

Route::get('/carrito/{id}', 'CartController@show');

Route::post('/carrito', 'CartController@destroy');

Route::view('/faq', 'faq');

Route::view('/contacto', 'contact');

Route::view('/perfil', 'userprofile');

Auth::routes();

Route::view('/login', 'login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/ABM', 'ABM');
