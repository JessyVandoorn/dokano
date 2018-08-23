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

Route::get('/app', 'ApplicationController@index')->name('application');
Route::get('/boten', 'BotenController@index');
Route::post('/boten', 'BotenController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inkomsten', 'InkomstenController@index')->name('inkomsten');
Route::get('/instellingen', 'InstellingenController@index')->name('instellingen');