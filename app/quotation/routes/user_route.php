<?php

    Route::resources([
        'user' => 'UserController',
    ]);

    Route::get('/user/{id}/pdf', 'UserController@pdf')->name('user.pdf');
