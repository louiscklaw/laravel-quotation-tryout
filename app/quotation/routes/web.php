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
    return view('quotation');
});

Route::get('/quotation', function () {
    return view('quotation');
});

include 'debug_route.php';
include 'client_route.php';
include 'user_route.php';
include 'quot_route.php';
