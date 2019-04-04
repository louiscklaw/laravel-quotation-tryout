<?php

include 'debug_route.php';

Route::get('/', 'CommonController@home')->name('quotation.home');

Route::match(['get','post'], '/helloworld', 'helloworldController@index')->name('helloworld.index');

Route::get('/helloget', 'helloworldController@index')->name('helloworld.index');
Route::post('/hellopost', 'helloworldController@index')->name('helloworld.hellopost');

Route::get('/quotation', function () {
    return view('quotation');
});

include 'debug_route.php';
// include 'client_route.php';
// include 'company_route.php';
// include 'user_route.php';
include 'quot_route.php';
// include 'pdf_route.php';

// include 'posts_route.php';
// include 'page_route.php';

// include 'colleagues_route.php';

// include 'colleagues_route.php';

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

$record_type=array(
    'posts',
    'page',
    'company',
    'site',
    'client',
    'colleagues',
    'Quot'
);


foreach($record_type as $record)
{
    Route::resources([
        $record => $record.'Controller',
    ]);

    Route::get('/'.$record.'/get_pdf')->name($record.'.pdf');
    Route::get('/'.$record.'/get_htmlpdf')->name($record.'.htmlpdf');
}

Route::get('/reports', 'ReportController@index')->name('reports.index');
