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

//paymethods
Route::get('/paymethod', 'PaymentmethodController@index');
Route::post('/paymethod', 'PaymentmethodController@store');
Route::delete('/paymethod/{paymentmethod}', 'PaymentmethodController@destroy');
Route::patch('/paymethod/{paymentmethod}', 'PaymentmethodController@update');

//scenario route
Route::get('/scenario/past', 'scenarioController@pastIndex');
Route::get('/scenario/future', 'scenarioController@futureIndex');
Route::get('/scenario/current', 'scenarioController@index');
Route::get('/scenario/create', 'scenarioController@create');
Route::post('/scenario/create', 'scenarioController@store');
Route::get('/scenario/{scenario}', 'scenarioController@edit');
Route::patch('/scenario/{scenario}', 'scenarioController@update');