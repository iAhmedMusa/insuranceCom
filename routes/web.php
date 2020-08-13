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

Route::get('/',  'AppControllers\testTableController@index')->name('home');
Route::get('create', 'AppControllers\testTableController@create')->name('create');
Route::post('add', 'AppControllers\testTableController@store')->name('add');
Route::get('search',  'AppControllers\testTableController@search')->name('search');
Route::delete('data/{id}','AppControllers\testTableController@delete')->name('delete');