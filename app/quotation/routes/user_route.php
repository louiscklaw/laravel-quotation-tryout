<?php

    Route::resources([
        'user' => 'userController',
    ]);

    Route::get('/user/{id}/pdf', 'userController@pdf')->name('user.pdf');
