<?php

    Route::resources([
        'client' => 'ClientController',
    ]);

    Route::get('/client/{id}/pdf', 'ClientController@pdf')->name('client.pdf');

    Route::get('/client/{id}/html', 'PdfController@htmlview')->name('client.htmlpdf');
