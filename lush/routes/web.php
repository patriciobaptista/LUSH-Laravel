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
<<<<<<< HEAD

=======
Route::get('logout', 'LoginController@logout');
Route::post('logout', 'LoginController@logout');
Auth::routes();
>>>>>>> aa8d837df01801c8322c7589cb9ca409bec707d4

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'index');

Route::view('/nosotros', 'about');

Route::resource('/destinos', 'ProductsController');

Route::get('/carrito', 'CartController@index');

Route::get('/carrito/{id}', 'CartController@show');

Route::post('/carrito', 'CartController@destroy');

Route::view('/faq', 'faq');

Route::view('/contacto', 'contact');

Route::get('/perfil', 'UserController@userprofile');
Route::post('/perfil', 'UserController@updateAvatar');

<<<<<<< HEAD
Auth::routes();

Route::view('/login', 'login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/ABM', 'ABM');
=======


Route::view('/carrito', 'cart');
>>>>>>> aa8d837df01801c8322c7589cb9ca409bec707d4
