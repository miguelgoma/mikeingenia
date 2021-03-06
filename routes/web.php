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

Route::group(['middleware' => ['web']], function() {
  Route::get('/vuejscrud', 'EmpleadosController@vueCrud');
  Route::resource('vueitems','EmpleadosController');
  Route::get('findemp/',array('as'=>'htmltopdf','uses'=>'SearchController@index'));
  Route::get('/vuejscrud/htmltopdf',array('as'=>'htmltopdf','uses'=>'PDFController@index'));
});
