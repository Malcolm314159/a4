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
    return view('home');
});
Route::get('/tunes', function () {
    return view('tunes');
});
Route::get('/addtune', function () {
    return view('addtune');
});
Route::get('/types', function () {
    return view('types');
});
