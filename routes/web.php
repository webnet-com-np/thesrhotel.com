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
})->name('index');

Route::get('/contact/', function () {
	return view('contact');
})->name('contact');

Route::get('/about/', function () {
	return view('about');
})->name('about');

Route::get('/conference-room/', function () {
	return view('conference-room');
})->name('conference');

Route::get('/next-line/', function () {
	return view('next-line');
})->name('nextline');

Route::get('/restaurants/', function () {
	return view('restaurants');
})->name('restaurants');

Route::get('/one-square-lounge/', function () {
	return view('one-square-lounge');
})->name('onesquarelounge');

Route::get('/lete-vansa/', function () {
	return view('lete-vansa');
})->name('letevansa');

Route::get('rooms/suite-room/', function () {
	return view('room-suite');
})->name('roomsuite');

Route::get('/room-deluxe/', function () {
	return view('room-deluxe');
})->name('roomdeluxe');

Route::get('/room-standard/', function () {
	return view('room-standard');
})->name('roomstandard');

Route::get('/room-honeymoon-suite/', function () {
	return view('room-honeymoon');
})->name('roomhoneymoon');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
