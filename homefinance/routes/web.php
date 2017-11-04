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

//types route
Route::get('/type', 'InOutTypeController@index');
Route::get('/type/create', 'InOutTypeController@create');
Route::post('/type', 'InOutTypeController@store');
Route::get('/type/{type}', 'InOutTypeController@show');
Route::patch('/type/{type}', 'InOutTypeController@update');

//income route
Route::get('/income', 'IncomeController@index');
Route::get('/income/create', 'IncomeController@create');
Route::post('/income', 'IncomeController@store');
Route::get('/income/{income}', 'IncomeController@edit');
Route::patch('/income/{income}', 'IncomeController@update');

//expenses route
Route::get('/expense', 'ExpenseController@index');
Route::get('/expense/create', 'ExpenseController@create');
Route::post('/expense', 'ExpenseController@store');
Route::get('/expense/{expense}', 'ExpenseController@edit');
Route::patch('/expense/{expense}', 'ExpenseController@update');