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

Route::get('/customer', 'CustomerController@index')->name('customer');

Route::get('/app', 'ApplicationController@index')->name('application');
Route::get('/boten', 'BotenController@index');
Route::post('boten', 'BotenController@store');
Route::post('/boten/remove/{id}', 'BotenController@destroy');
Route::post('/companies/{c_id}/tijdsloten/{id}/remove', 'TijdslotenController@destroy');
Auth::routes();

Route::get('/gesloten', 'GeslotenController@index');
Route::post('gesloten', 'GeslotenController@store');

Route::get('/reservaties/{date}', 'ReservatiesController@index');
Route::post('reservaties', 'ReservatiesController@store');

Route::get('/klanten', 'KlantenController@index');
Route::post('/klanten', 'KlantenController@store');
Route::get('/klanten/{id}', 'KlantenController@show');

Route::get('/companies/{c_id}/tijdsloten', 'TijdslotenController@index');
Route::post('tijdsloten', 'TijdslotenController@store');

Route::get('/user', 'UserController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inkomsten', 'InkomstenController@index')->name('inkomsten');
Route::get('/instellingen', 'InstellingenController@index')->name('instellingen');