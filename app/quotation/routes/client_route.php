<?php

    Route::match(['get','post'],'/client/index_table_content','clientController@index_table_content')->name('client.index_table_content');

    Route::resources([
        'client' => 'ClientController',
    ]);

    Route::get('/client/{id}/pdf', 'ClientController@pdf')->name('client.pdf');

    Route::get('/client/{id}/html', 'PdfController@htmlview')->name('client.htmlpdf');
