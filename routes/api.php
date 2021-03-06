<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('ubigeos', 'UbigeoController');

Route::get('zonas', 'ZonaController@index');

Route::get('vias', 'ViaController@index');

Route::get('tipo-cambio', 'MonedaController@index');
