<?php

namespace App\Http\Controllers\Reservation;

use App\Mail\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    //stores the reservation bar infomation from home page to session
	public function  reserve(Request $request){
		session([
			'arrival_date' => $request->arrive_date,
			'departure_date' => $request->departure_date,
			'guest_numbers' => $request->guest_numbers,
			'children' => $request->children,
			'adult' => $request->adult,
			'room_type' => $request->room_type
		]);
		return view('bookings.guest-info');
	}

	//sends email from guest-info for reservation

	public function mail(Request $request){
		Mail::to('thesrhotel@gmail.com')->send(new Reservation());
		return redirect()
			->route('bookings')
			->with(['message' => "Your request  has been successfully sent "]);
	}


}
