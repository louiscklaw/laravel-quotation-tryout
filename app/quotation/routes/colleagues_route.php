<?php

    Route::get('/colleagues/{id}/pdf', 'colleaguesController@pdf')->name('colleagues.pdf');

    Route::get('/colleagues/{id}/html', 'PdfController@htmlview')->name('colleagues.htmlpdf');
