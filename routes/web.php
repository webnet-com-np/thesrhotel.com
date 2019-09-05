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
    return view('index', [
	    'metas' => config( "meta_tags.home" ) ,
    ]);
})->name('index');

Route::get('/contact-us/', function () {
	return view('contact');
})->name('contact');

Route::get('/about-us/', function () {
	return view('about');
})->name('about');

Route::get('/conference-room/', function () {
	return view('conference-room');
})->name('conference');

Route::get('/next-in-line/', function () {
	return view('next-line');
})->name('nextline');

Route::get('/restaurants/', function () {
	return view('restaurants',[
		'metas' => config( "meta_tags.restaurants" )
	]);
})->name('restaurants');

Route::get('restaurants/one-square-lounge/', function () {
	return view('one-square-lounge');
})->name('onesquarelounge');

Route::get('restaurants/lete-vansa/', function () {
	return view('lete-vansa');
})->name('letevansa');

Route::get('rooms/suite-rooms/', function () {
	return view('room-suite');
})->name('roomsuite');

Route::get('rooms/deluxe-rooms/', function () {
	return view('room-deluxe');
})->name('roomdeluxe');

Route::get('rooms/standard-rooms/', function () {
	return view('room-standard');
})->name('roomstandard');

Route::get('rooms/honeymoon-suite-rooms/', function () {
	return view('room-honeymoon');
})->name('roomhoneymoon');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/contact/email','Contact\ContactController@send')->name('send_email');

//bookings reservation bar
Route::post('/bookings','Reservation\ReservationController@postreserve')->name('bookings');
Route::get('/bookings','Reservation\ReservationController@getreserve')->name('bookings.getreserve');
Route::post('/bookings/email','Reservation\ReservationController@mail')->name('reserve_email');


Route::get('mail/send', function () {
	\Illuminate\Support\Facades\Mail::to(['email'=>'sohanmax02@gmail.com'])->send(new \App\Mail\TestEmail());

});

Route::get('/test_mail', 'TestController@testMail');

Route::get('/test', function()
{
	$beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
    $beautymail->send('emails.welcome', [], function($message)
    {
        $message
			->from('info@thesrhotel.com')
			->to('sohanmax02@gmail.com', 'John Smith')
			->subject('Welcome!');
    });

});

Route::get('/thank-you', function(){
	return view('thank-you');
});


