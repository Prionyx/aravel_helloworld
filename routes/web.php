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
Route::get('/admin', 'Back\AdminController@index')->name('admin');
Route::get('/users', 'Back\UsersController@index')->name('users');
Route::get('/users', 'Back\UsersController@index')->name('users.index');
Route::get('/users/{user}/edit', 'Back\UsersController@edit')->name('users.edit');
Route::put('/users/{user}', 'Back\UsersController@update')->name('users.update');
Route::delete('/users/{user}', 'Back\UsersController@destroy')->name('users.destroy');
