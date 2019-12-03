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

Auth::routes();

Route::view('/', 'index');

Route::view('/nosotros', 'about');

Route::view('/destinos', 'destinations');

Route::view('/faq', 'faq');

Route::view('/contacto', 'contact');

Route::view('/perfil', 'userprofile');

Route::view('/carrito', 'cart');

Auth::routes();

Route::view('/login', 'login');
