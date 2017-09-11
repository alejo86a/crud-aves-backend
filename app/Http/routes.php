<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('zona', 'ZonaCtrl@index');

Route::get('pais', 'PaisCtrl@index');

Route::get('ave', 'AveCtrl@index');

Route::get('ave/{id}', 'AveCtrl@indexPorId');

Route::post('ave', 'AveCtrl@store');

Route::delete('ave/{id}', 'AveCtrl@destroy');



