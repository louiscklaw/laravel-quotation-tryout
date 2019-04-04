<?php

    Route::get('/quot/index_table_content','QuotController@index_table_content')->name('Quot.index_table_content');

    Route::get('/quot/{id}/pdf', 'PdfController@pdfview')->name('quot.pdf');

    Route::get('/quot/{id}/html', 'PdfController@htmlview')->name('quot.htmlpdf');
