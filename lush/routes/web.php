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

Route::get('/destinos', 'ProductsController@index');

Route::get('destinos/{id}', 'ProductsController@show');

Route::post('/destinos{id}', 'CartController@store');

Route::get('/carrito', 'CartController@index');

Route::post('/carrito', 'CartController@destroy');

Route::view('/faq', 'faq');

Route::view('/contacto', 'contact');

Route::get('/perfil', 'UserController@userprofile');
Route::post('/perfil', 'UserController@updateAvatar');

Route::get('/ABM/main', 'ABMcontroller@index');

Route::get('ABM/edit/{id}', 'ABMcontroller@ABMdirect');

Route::post('/ABM/edit', 'ABMcontroller@edit');

Route::get('ABM/edit/{id}/borrarFoto', 'ABMcontroller@borrarFoto');
Route::get('ABM/edit/{id}/borrarHighlight', 'ABMcontroller@borrarHighlight');
Route::get('ABM/edit/{id}/borrarInclude', 'ABMcontroller@borrarInclude');

Route::view('ABM/add', '/ABM/add');
Route::post('ABM/add', 'ABMcontroller@add');

Route::get('ABM/destroy/{id}', 'ABMcontroller@delete');


Route::view('/carrito', 'cart');
