<?php

use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('usuarios','UsersController')->names('usuarios');

Route::resource('insumos','InsumoController')->names('insumos');

Route::resource('produccion','ProduccionController')->names('produccion');

Route::resource('sucursales','SucursalController')->names('sucursales');

Route::resource('zapatos','ZapatoController')->names('zapatos');
Route::get('zapat','ZapatoController@edi')->name('edi');

Route::resource('ventas','VentaController')->names('ventas');


Route::resource('empresas','EmpresaController')->names('empresas');

Route::resource('productos','ProductoController')->names('productos');

Route::resource('reportes','ReportController')->names('reportes');


// Auth::routes();
Auth::routes(['verify' => true]);
