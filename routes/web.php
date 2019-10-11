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

Route::get('/', function () {
    return view('index');
});
Route::get('/','ContactController@index')->name('index');
Route::get('/{id}/destroy','ContactController@destroy')->name('destroy');
Route::get('/create','ContactController@create')->name('create');
Route::post('/create','ContactController@store')->name('store');
Route::post('/search','ContactController@search')->name('search');
