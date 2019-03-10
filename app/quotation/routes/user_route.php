<?php

    Route::resources([
        'user' => 'userController',
    ]);

    Route::get('/user/{id}/pdf', 'userController@pdf')->name('user.pdf');
    Route::get('/user/{id}/htmlpdf', 'userController@htmlpdf')->name('user.htmlpdf');
