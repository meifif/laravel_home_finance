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

//Route::get('/type/{id}', 'InOutTypeController@index');
//Route::update('/type/{id}', 'InOutTypeController@update')->name('types management');
