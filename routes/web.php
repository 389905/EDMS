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
Route::get('district/{district}', 'DistrictController@show')->name('district.show');

// user
Route::get('user', 'userController@index')->name('user.index');
Route::get('user/create', 'userController@create')->name('user.create');
Route::post('user', 'userController@store')->name('user.store');
Route::get('user/{user}/edit', 'userController@edit')->name('user.edit');
Route::put('user/{user}', 'userController@update')->name('user.update');
Route::delete('user/{user}', 'userController@destroy')->name('user.destroy');

// polling division
Route::get('pollingdivision/create/{district}', 'PollingDivisionController@create')->name('pollingDivision.create');
Route::post('pollingdivision', 'PollingDivisionController@store')->name('pollingDivision.store');
Route::delete('pollingdivision/{pollingDivision}', 'PollingDivisionController@destroy')->name('pollingDivision.destroy');
