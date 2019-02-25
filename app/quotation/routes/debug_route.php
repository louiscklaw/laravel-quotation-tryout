<?php

    include 'client_route.php';

    Route::get('/phpinfo', function () {
        return view('phpinfo');
    });

    Route::get('/debug_client', function () {
        return view('debug_client');
    });

    Route::get('/debug_user', function () {
        return view('debug_user');
    });

    Route::resources([
        'quotation' => 'QuotController',
    ]);

    Route::get('/debug_quotation', 'QuotController@debug_index')->name('debug_quot.debug_index');
    Route::get('/debug_quotation/{id}/edit', 'QuotController@debug_edit')->name('debug_quot.debug_edit');
    Route::get('/debug_quotation/{id}/pdf', 'QuotController@debug_pdf')->name('debug_quot.debug_pdf');
    Route::get('/debug_quotation/{id}/view', 'QuotController@debug_view')->name('debug_quot.debug_view');

    Route::get('/debug_user', 'QuotController@debug_list')->name('debug_user.debug_list');
    Route::get('/debug_user/{id}/edit', 'QuotController@debug_edit')->name('debug_user.debug_edit');
    Route::get('/debug_user/{id}/pdf', 'QuotController@debug_pdf')->name('debug_user.debug_pdf');
    Route::get('/debug_user/{id}/view', 'QuotController@debug_view')->name('debug_user.debug_view');

    Route::get('/debug_client', 'ClientController@debug_index')->name('debug_client.debug_list');
    Route::get('/debug_client/{id}/edit', 'ClientController@debug_edit')->name('debug_client.debug_edit');
    Route::get('/debug_client/{id}/pdf', 'ClientController@debug_pdf')->name('debug_client.debug_pdf');
    Route::get('/debug_client/{id}/view', 'ClientController@debug_view')->name('debug_client.debug_view');


    Route::get('/basic_form', function()
    {
        return view('basic_form');
    });
