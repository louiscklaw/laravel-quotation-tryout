<?php

    Route::resources([
        'user' => 'ClientController',
    ]);

    Route::get('/user/{id}/pdf', 'UserController@pdf')->name('user.pdf');
