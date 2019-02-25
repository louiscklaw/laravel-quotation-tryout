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

Route::get('/phpinfo', function () {
    return view('phpinfo');
});

Route::get('/debug_client', function () {
    return view('debug_client');
});

Route::get('/debug_user', function () {
    return view('debug_user');
});

Route::get('/debug_quotation', 'QuotController@debug_list')->name('quot.debug_list');

Route::get('/debug_quotation/{id}', 'QuotController@debug_edit')->name('quot.debug_edit');
