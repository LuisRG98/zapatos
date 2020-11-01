<?php

use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'UsersController@index')->name('home');

Route::resource('usuarios','UsersController')->names('usuarios');

Route::resource('zapatos','ZapatoController')->names('zapatos');
Route::get('zapat','ZapatoController@edi')->name('edi');

Route::resource('ventas','VentaController')->names('ventas');


Route::resource('empresas','EmpresaController')->names('empresas');

Route::resource('productos','ProductoController')->names('productos');


Auth::routes();

