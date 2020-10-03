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

// minor change

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// district
Route::get('district', 'DistrictController@index')->name('district.index');
Route::get('district/{district}', 'DistrictController@show')->name('district.show');

// user
Route::get('user', 'UserController@index')->name('user.index');
Route::get('user/create', 'UserController@create')->name('user.create');
Route::post('user', 'UserController@store')->name('user.store');
Route::get('user/{user}/edit', 'UserController@edit')->name('user.edit');
Route::put('user/{user}', 'UserController@update')->name('user.update');
Route::delete('user/{user}', 'UserController@destroy')->name('user.destroy');

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

// grama niladhari divisions
Route::get('gndivision/create/{divSec}', 'gnDivisionController@create')->name('gndivision.create');
Route::post('gndivision', 'gnDivisionController@store')->name('gndivision.store');
Route::get('gndivision/{gnDivision}/edit', 'gnDivisionController@edit')->name('gndivision.edit');
Route::put('gndivision/{gnDivision}', 'gnDivisionController@update')->name('gndivision.update');
Route::delete('gndivision/{gnDivision}', 'gnDivisionController@destroy')->name('gndivision.destroy');
Route::get('gndivision/{gnDivision}', 'gnDivisionController@show')->name('gndivision.show');

// villages divisions
Route::get('village/create/{gnDivision}', 'VillageController@create')->name('village.create');
Route::post('village', 'VillageController@store')->name('village.store');
Route::get('village/{village}/edit', 'VillageController@edit')->name('village.edit');
Route::put('village/{village}', 'VillageController@update')->name('village.update');
Route::delete('village/{village}', 'VillageController@destroy')->name('village.destroy');
Route::get('village/{village}', 'VillageController@show')->name('village.show');

// polling booths
Route::get('pollingbooth/create/{pollingDivision}', 'PollingBoothController@create')->name('pollingbooth.create');
Route::post('pollingbooth', 'PollingBoothController@store')->name('pollingbooth.store');
Route::get('pollingbooth/{pollingBooth}/edit', 'PollingBoothController@edit')->name('pollingbooth.edit');
Route::put('pollingbooth/{pollingBooth}', 'PollingBoothController@update')->name('pollingbooth.update');
Route::delete('pollingbooth/{pollingBooth}', 'PollingBoothController@destroy')->name('pollingbooth.destroy');
Route::get('pollingbooth/{pollingBooth}', 'PollingBoothController@show')->name('pollingbooth.show');

// voters
Route::get('voter/create/{pollingBooth}', 'VoterController@create')->name('voter.create');
Route::post('voter', 'VoterController@store')->name('voter.store');
Route::get('voter/{voter}/edit', 'VoterController@edit')->name('voter.edit');
Route::put('voter/{voter}', 'VoterController@update')->name('voter.update');
Route::get('voter/{voter}', 'VoterController@show')->name('voter.show');
