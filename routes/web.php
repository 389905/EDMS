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
    return view('index');
})->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// district
Route::get('district', 'DistrictController@index')->name('district.index');

// user
Route::get('user', 'userController@index')->name('user.index');
Route::get('user/create', 'userController@create')->name('user.create');
Route::post('user', 'userController@store')->name('user.store');
Route::get('user/{user}/edit', 'userController@edit')->name('user.edit');
Route::put('user/{user}', 'userController@update')->name('user.update');
