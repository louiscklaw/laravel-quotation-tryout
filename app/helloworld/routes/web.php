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

Route::get('/phpinfo', function () {
    return view('phpinfo');
});

Auth::routes();

Route::get('/home', 'homeController@index')->name('home');

Route::post('/update/helloworld', 'helloworldController@update')->name('helloworld.update');

Route::get('/helloworld', 'helloworldController@index')->name('helloworld.index');
