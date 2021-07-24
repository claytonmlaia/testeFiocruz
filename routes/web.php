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

Route::get('/USR', 'App\Http\Controllers\UsuariosController@index');
Route::post('/USR', 'App\Http\Controllers\UsuariosController@store');
Route::get('/USR/{id}', 'App\Http\Controllers\UsuariosController@show');
Route::post('/USR/{id}', 'App\Http\Controllers\UsuariosController@update');
Route::delete('/USR/{id}', 'App\Http\Controllers\UsuariosController@destroy');
Route::get('/LST', 'App\Http\Controllers\UsuariosController@lista');
Route::get('/LST/{id}', 'App\Http\Controllers\UsuariosController@setaMunicipios');
