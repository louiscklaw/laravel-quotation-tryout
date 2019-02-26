<?php

    Route::resources([
        'quot' => 'QuotController',
    ]);

    Route::get('/quot/{id}/pdf', 'QuotController@get_pdf')->name('quot.pdf');
