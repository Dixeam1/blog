<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index');
Route::post('/home', 'HomeController@index');
Route::get('/create', 'BlogController@create');
Route::post('/submit', 'BlogController@store');
Route::get('delete/{id}', 'BlogController@destroy');
Route::get('edit/{id}', 'BlogController@edit');
Route::post('update/{id}', 'BlogController@update');
