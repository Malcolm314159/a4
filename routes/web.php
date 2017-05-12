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

#Routes for the main navigation
Route::get('/', 'MainController@home');
Route::get('tunes', 'TuneController@allTunes');
Route::get('addtune', 'TuneController@addtune');
Route::get('types', 'TypeController@types');
Route::get('/search', 'MainController@search');

#Tune processing, editing, etc...
Route::post('processNewTune', 'TuneController@processNewTune');
Route::get('/delete/{id}', 'TuneController@processTuneDeletion');
Route::get('/edit/{id}', 'TuneController@edit');
Route::post('processTuneEdits', 'TuneController@processTuneEdits');
Route::get('tunes/key/{key}', 'TuneController@tunesByKey');
Route::get('tunes/mode/{mode}', 'TuneController@tunesByMode');

#Type processing, editing, etc...
Route::post('processNewType', 'TypeController@processNewType');
Route::get('/edittype/{id}', 'TypeController@editType');
Route::post('processTypeEdits', 'TypeController@processTypeEdits');
