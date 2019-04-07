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


Route::get('/', 'commonController@index')->name('home');



// // Route::get('/quotation', function () {
// //     return view('quotation');
// // });

// include 'debug_route.php';
// // include 'client_route.php';
// // include 'company_route.php';
// // include 'user_route.php';
// // include 'quot_route.php';
// // include 'pdf_route.php';

// // include 'posts_route.php';
// // include 'page_route.php';

// // include 'colleagues_route.php';

// // Route::get('/helloworld', 'helloworldController@index')->name('helloworld.index');

// Route::get('/reports', 'ReportController@index')->name('reports.index');


Auth::routes();



$record_types=array(
    'posts',
    'page',
    'company',
    'site',
    'client',
    'colleagues',
    'Quot',
    'Report'
);

foreach($record_types as $record_type)
{

    Route::get('/'.$record_type.'/get_pdf', $record_type.'Controller@get_pdf')->name($record_type.'.pdf');

    Route::resources([
        $record_type => $record_type.'Controller',
    ]);

    Route::get("/index/$record_type", $record_type.'Controller@index')->name("$record_type.index");


    Route::get("/$record_type/{id}/get_pdf", function(){
        return 'helloworld';
    })->name($record_type.'.pdf');

    // Route::get('/'.$record_type.'/get_htmlpdf')->name($record_type.'.htmlpdf');
    // Route::get('/'.$record.'/helloworld', 'QuotController@helloworld')->name($record.'.helloworld');


    // to serve the ajax call on index page
    Route::post("/index_table_content/$record_type", $record_type."Controller@index_table_content")->name("$record_type.index_table_content");

}


// Route::get('/index_table_content/quot','QuotController@index_table_content')->name('Quot.index_table_content');


// Route::post('/index_table_content/client', 'clientController@index_table_content')->name('client.index_table_content');

Route::get('/helloworld', 'helloworldController@index')->name('helloworld.index');
