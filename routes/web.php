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
    return view('index');
})->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/ticket/create', 'TicketController@create');
Route::post('/ticket/create', 'TicketController@store');
Route::get('/tickets', 'TicketController@index');
Route::get('/tickets/{slug}', 'TicketController@show');
Route::get('/tickets/{slug}/edit', 'TicketController@edit');
Route::post('/tickets/{slug}/edit', 'TicketController@update');
