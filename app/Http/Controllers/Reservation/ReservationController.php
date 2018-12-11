<?php

namespace App\Http\Controllers\Reservation;

use App\Mail\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    //stores the reservation bar infomation from home page to session
	public function postreserve(Request $request){

		session()->put('booking',[

			'arrival_date' => $request->arrive_date,
			'departure_date' => $request->departure_date,
			'guest_numbers' => $request->guest_numbers,
			'children' => $request->children,
			'adult' => $request->adult,
			'room_type' => $request->room_type
		]);
		return view('bookings.guest-info');
	}

	public function getreserve(){
		return view('bookings.guest-info');
	}
	//sends email from guest-info for reservation

	public function mail(Request $request){
		if (session()->has('booking')){
			try{
				Mail::to('thesrhotel@gmail.com')->send(new Reservation());
				session()->pull('booking');
				return redirect()
					->route('bookings.getreserve')
					->with(['message' => "Your request  has been successfully sent "]);
			}
			catch(\Exception $exception){
				session()->pull('booking');
				throw $exception;
			}
		}else{
			return redirect()
				->route('index');
		}

	}


}
