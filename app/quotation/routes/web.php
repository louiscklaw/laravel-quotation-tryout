<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CommonController@home')->name('quotation.home');



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

Route::get('/helloworld', 'helloworldController@index')->name('helloworld.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

$record_types=array(
    'posts',
    'page',
    'company',
    'site',
    'client',
    'colleagues',
    'Quot'
);

foreach($record_types as $record_type)
{
    Route::resources([
        $record_type => $record_type.'Controller',
    ]);

    Route::get('/'.$record_type.'/get_pdf', 'QuotController@get_pdf')->name($record_type.'.pdf');
    Route::get('/'.$record_type.'/get_htmlpdf')->name($record_type.'.htmlpdf');

    // Route::get('/'.$record.'/helloworld', 'QuotController@helloworld')->name($record.'.helloworld');
}

Route::get('/reports', 'ReportController@index')->name('reports.index');
