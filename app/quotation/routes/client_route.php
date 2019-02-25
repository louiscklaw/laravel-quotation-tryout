<?php

    Route::resources([
        'client' => 'ClientController',
    ]);

    Route::get('/client/{id}/pdf', 'ClientController@pdf')->name('client.pdf');
