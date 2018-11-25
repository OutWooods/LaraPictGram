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

Route::get('/', 'WelcomeController@index');

Route::get('/picts', 'PictsController@index');
Route::post('/picts', 'PictsController@store');
Route::get('/picts/create', 'PictsController@create');
Route::get('/picts/{pict}', 'PictsController@show');
Route::patch('/picts/{pict}', 'PictsController@update');
Route::delete('/picts/{pict}', 'PictsController@destroy');
Route::get('/picts/{pict}/edit', 'PictsController@edit');
