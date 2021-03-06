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
//Route::get('/',function () {
//    return view('welcome');
//});
Route::view('/','welcome');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('', 'admin\HomeController@index')->name('dashboard');
    Route::get('/users', 'admin\UserController@index')->name('users.index');
    Route::get('/users/{$id}', 'admin\UserController@edit')->name('users.edit');
});
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
