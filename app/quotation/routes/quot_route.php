<?php

    Route::resources([
        'quot' => 'QuotController',
    ]);

    Route::get('/quot/{id}/pdf', 'PdfController@pdfview')->name('quot.pdf');

    Route::get('/quot/{id}/html', 'PdfController@htmlview')->name('quot.htmlpdf');
