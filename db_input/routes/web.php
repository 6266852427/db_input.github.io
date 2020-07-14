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
Route::get('/','InputInsertController@insertform');
Route::post('create','InputInsertController@insert');

Route::get('create/{id}','InputInsertController@show');
Route::post('create/{id}','InputInsertController@edit');
Route::get('delete/{id}','InputInsertController@destroy');

Route::get('/export','InputInsertController@export');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
