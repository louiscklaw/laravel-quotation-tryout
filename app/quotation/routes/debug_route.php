<?php

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
    Route::get('/debug_quotation/{id}/edit', 'QuotController@debug_edit')->name('quot.debug_edit');
    Route::get('/debug_quotation/{id}/pdf', 'QuotController@debug_pdf')->name('quot.debug_pdf');
    Route::get('/debug_quotation/{id}/view', 'QuotController@debug_view')->name('quot.debug_view');

    Route::get('/debug_user', 'QuotController@debug_list')->name('user.debug_list');
    Route::get('/debug_user/{id}/edit', 'QuotController@debug_edit')->name('user.debug_edit');
    Route::get('/debug_user/{id}/pdf', 'QuotController@debug_pdf')->name('user.debug_pdf');
    Route::get('/debug_user/{id}/view', 'QuotController@debug_view')->name('user.debug_view');

    Route::get('/debug_client', 'QuotController@debug_list')->name('client.debug_list');
    Route::get('/debug_client/{id}/edit', 'QuotController@debug_edit')->name('client.debug_edit');
    Route::get('/debug_client/{id}/pdf', 'QuotController@debug_pdf')->name('client.debug_pdf');
    Route::get('/debug_client/{id}/view', 'QuotController@debug_view')->name('client.debug_view');
