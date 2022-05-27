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

// - - - - - VISTAS - - - - - - - - - - - - - - - - - - - 

Route::get('/', 'IndexController@index');
Route::get('/registrar', 'RegistrarController@registrar');
Route::get('/producto', 'ProductoController@producto')->name('vista.producto');


// ------------------------- METODOS POST ---------------------

Route::post('/registrar', 'RegistrarController@registro')->name('añadir.movimiento');
Route::post('/producto', 'ProductoController@registrarProducto')->name('añadir.producto');

