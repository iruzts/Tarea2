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

Route::get('/ruta1', function () {
    return ('Ruta 1');
});

Route::get('/ruta2', function () {
    return ('Ruta 2');
});

Route::get('/ruta3', function () {
    return ('Ruta 3');
});

Route::get('/ruta4', function () {
    return ('Ruta 4');
});

Route::get('/ruta5', function () {
    return ('Ruta 5');
});