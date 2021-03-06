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

Route::get('/', 'ArticlesController@index');
Route::get('create', 'ArticlesController@create');
Route::post('create', 'ArticlesController@store');
Route::get('edit/{id}', 'ArticlesController@edit');
Route::post('edit', 'ArticlesController@update');
Route::get('delete/{id}', 'ArticlesController@show');
Route::post('delete', 'ArticlesController@delete');
