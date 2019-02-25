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
