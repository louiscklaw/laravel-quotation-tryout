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

Route::get('/helloshopping', function (){
    return 'hello shopping';
});

Route::get('/helloadd', function(){
    Cart::add('192ao12', 'Product 1', 1, 9.99);
    Cart::add('1239ad0', 'Product 2', 2, 5.95, ['size' => 'small']);

    return view('layouts.cart');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
