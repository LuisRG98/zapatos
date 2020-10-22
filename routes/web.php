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

Route::resource('usuarios','App\Http\Controllers\UsersController')->names('usuarios');

Route::resource('zapatos','App\Http\Controllers\ZapatoController')->names('zapatos');

Route::resource('empresas','App\Http\Controllers\EmpresaController')->names('empresas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
