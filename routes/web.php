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
Route::get('pollingdivision/{pollingDivision}/edit', 'PollingDivisionController@edit')->name('pollingDivision.edit');
Route::put('pollingdivision/{pollingDivision}', 'PollingDivisionController@update')->name('pollingDivision.update');
Route::delete('pollingdivision/{pollingDivision}', 'PollingDivisionController@destroy')->name('pollingDivision.destroy');
Route::get('pollingdivision/{pollingDivision}', 'PollingDivisionController@show')->name('pollingDivision.show');

// divisional secretariats
Route::get('divsec', 'DivSecController@index')->name('divsec.index');
Route::get('divsec/create', 'DivSecController@create')->name('divsec.create');
Route::post('divsec', 'DivSecController@store')->name('divsec.store');
Route::get('divsec/{divSec}/edit', 'DivSecController@edit')->name('divsec.edit');
Route::put('divsec/{divSec}', 'DivSecController@update')->name('divsec.update');
Route::delete('divsec/{divSec}', 'DivSecController@destroy')->name('divsec.destroy');
Route::get('divsec/{divSec}', 'DivSecController@show')->name('divsec.show');
