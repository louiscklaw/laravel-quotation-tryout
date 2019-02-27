<?php
    Route::get('pdfview',array('as'=>'pdfview','uses'=>'PdfController@pdfview'));
    Route::get('htmlview',array('as'=>'htmlview','uses'=>'PdfController@htmlview'));
