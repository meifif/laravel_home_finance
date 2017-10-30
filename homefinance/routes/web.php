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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//types management
Route::get('/type', 'InOutTypeController@index');
Route::get('/type/create', 'InOutTypeController@create');
Route::post('/type', 'InOutTypeController@store');
Route::get('/type/{type}', 'InOutTypeController@show');
Route::patch('/type/{type}', 'InOutTypeController@update');
