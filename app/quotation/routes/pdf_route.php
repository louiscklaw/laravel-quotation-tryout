<?php
    Route::get('/{id}/pdfview',array('as'=>'pdfview','uses'=>'PdfController@pdfview'));
    Route::get('htmlview',array('as'=>'htmlview','uses'=>'PdfController@htmlview'));
