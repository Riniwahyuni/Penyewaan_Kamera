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

Route::get('/contoh', function(){
   echo 'Contoh Routing ';
});

Route::resource('kamera','kameraController');

Route::get('/kmr', function(){
    return kamera::all();
});

Route::get('kamera', 'kameraController@index')
    ->name('kamera.index');

Route::get('', 'kameraController@create');
Route::resource('kamera', 'kameraController');
