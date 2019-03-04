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

Route::get('/', 'FrontEndController@home')->name('home');


Route::get('/admin/home', 'CommonController@home')->name('quotation.home');


include 'debug_route.php';
include 'client_route.php';
include 'user_route.php';
include 'quot_route.php';
include 'pdf_route.php';

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
