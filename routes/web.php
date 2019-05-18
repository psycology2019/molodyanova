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

Route::get('/', function () {return view('welcome');});
Route::get('oferta', 'OfertaController@getIndex');
Route::get('confedencialnost', 'ConfedentController@getIndex');
Route::get('about', 'AboutController@getIndex');
/*Route::get('about', 'ProgramController@getIndex');*/
Route::get('consultation', 'ConsultController@getIndex');
Route::get('reviews', 'ReviesController@getIndex');
Route::get('contact', 'ContactController@getIndex');
