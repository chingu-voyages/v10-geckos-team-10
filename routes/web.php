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

Route::prefix('ticket')->group(function() {
	Route::get('', 'TicketController@index');
	Route::get('{slug}', 'TicketController@show');
	Route::get('create', 'TicketController@create');
	Route::post('create', 'TicketController@store');
});
