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

if (app()->environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'helloController@index')
    ->middleware('hello');
Route::post('hello', 'helloController@post')
    ->middleware('hello');

Route::get('user', 'userController@index')
    ->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
