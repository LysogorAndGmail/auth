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

// User routes
Route::get('/users', 'UserController@index');
Route::get('/user/{user}/show', 'UserController@show');
Route::put('/user/{user}/update', 'UserController@update');
Route::post('/user/store', 'UserController@store');
Route::delete('/user/{user}/destroy', 'UserController@destroy');
