<?php

    Route::resources([
        'quot' => 'QuotController',
    ]);

    Route::get('/quot/{id}/pdf', 'QuotController@pdf')->name('quot.pdf');
