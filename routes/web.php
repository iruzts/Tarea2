<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnoController;
use App\Http\Controllers\DosController;
use App\Http\Controllers\TresController;
use App\Http\Controllers\CuatroController;
use App\Http\Controllers\CincoController;

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

//Route::get('/ruta1', function () {
  //  return ('Ruta 1');
//});
Route::get('/ruta1','UnoController@index');
Route::get('/ruta2','DosController@index');
Route::get('/ruta3','TresController@index');
Route::get('/ruta4','CuatroController@index');
Route::get('/ruta5','CincoController@index');
