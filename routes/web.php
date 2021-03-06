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
Route::get('login', function() {
    // ...
})->name('login');

Route::get('login', function() {
    // ...
})->name('login');

Route::get('/', function () {
    return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route:: resource('encuestas','EncuestaController');

Route:: resource('preguntas','PreguntaController');
Route:: resource('respuestas','RespuestaController');

Route::post('respuestas/[id]','PreguntaController@show');


