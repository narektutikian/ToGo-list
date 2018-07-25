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

Route::group(['namespace' => 'Api\V1'], function () {
    Route::resource('places', 'PlacesController', ['except' => ['create', 'edit']]);
    Route::get('init', 'PlacesController@init')->name('init');
    Route::get('data', 'PlacesController@data')->name('places.data');
});
