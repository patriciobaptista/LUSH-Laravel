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

Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/layout', function(){
    return view('layout');
});

Route::get('/lush', function(){
    return view('index');
});

Route::get('/nosotros', function(){
    return view('about');
});

Route::get('/registro', function(){
    return view('register');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/destinos', function(){
    return view('destinations');
});

Route::get('/faq', function(){
    return view('faq');
});

Route::get('/contacto', function(){
    return view('contact');
});

Route::get('/perfil', function(){
    return view('userprofile');
});

Route::get('/carrito', function(){
    return view('cart');
});
Auth::routes();

Route::get('/home', function(){
  return view('/auth/login');
});

Route::post('/home', 'HomeController@index');
