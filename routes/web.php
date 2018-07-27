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

Route::get('/', function () {
    return view('generar-codigo');
});

Route::get('/mostrar', function () {
    return view('ingresar-codigo');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
