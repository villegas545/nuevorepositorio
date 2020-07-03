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

Route::get('/itc91bd','controladorItc91bd@mostrar');








Route::get('/prueba2tic63','controladorPrueba2@mostrar' );

Route::get('/ruta3','controladorPrueba3@mostrar' );





























Route::get("/tic63/{oficio}",'controladorTic63@mostrar');

Route::get("/mostrar",'controladorPagina@mostrar');

Route::get('/mostrar','controladorMostrar@mostrar')->name("noticias");

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pruebatic62','controladorPrueba@mostrar');

Route::get('/mvctic62','controladorMvc62@mostrar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
