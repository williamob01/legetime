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

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', 'RoutingController@index');
    Route::get('logout', 'RoutingController@logout');

    Route::get('specialties', 'SpecialtyController@index')->name('specialties.index');
    Route::get('specialties/create', 'SpecialtyController@create')->name('specialties.create');
    Route::post('specialties/store', 'SpecialtyController@store')->name('specialties.store');
    Route::get('specialties/{specialty}/edit', 'SpecialtyController@edit')->name('specialties.edit');
    Route::put('specialties/{specialty}', 'SpecialtyController@update')->name('specialties.update');
    Route::get('specialties/{specialty}', 'SpecialtyController@show')->name('specialties.show');

    //Usuarios
    Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
    Route::get('users/{user}', 'UserController@show')->name('users.show');
    //Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
});