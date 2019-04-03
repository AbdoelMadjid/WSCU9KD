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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/web', 'IndexController@index');

Route::get('/web/datatable', 'IndexController@datatable');

Route::get('/web/calendar', 'IndexController@calendar');

Route::get('/web/gallery', 'IndexController@gallery');

Route::get('/web/gmap-xml', 'IndexController@gmap_xml');

Route::get('/web/inbox', 'IndexController@inbox');

Route::get('/web/invoice', 'IndexController@invoice');

Route::get('/web/profile', 'IndexController@profile');

Route::group( [
    "namespace" => "Tables"
], function () {
    Route::get( '/web/tables/data-tables', 'DataTables@index' );
    Route::get( '/web/tables/jquery-grid', 'JqueryGrid@index' );
    Route::get( '/web/tables/normal-tables', 'NormalTables@index' );
} );

