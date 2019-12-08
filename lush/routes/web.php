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
Route::get('logout', 'LoginController@logout');
Route::post('logout', 'LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'index');

Route::view('/nosotros', 'about');

Route::view('/destinos', 'destinations');

Route::view('/faq', 'faq');

Route::view('/contacto', 'contact');

Route::get('/perfil', 'UserController@userprofile');
Route::post('/perfil', 'UserController@updateAvatar');



Route::view('/carrito', 'cart');
