<?php

namespace App\Http\Controllers\Reservation;

use App\Mail\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    //stores the reservation bar infomation from home page to session
	public function postreserve(Request $request){

		$reservation_info = [

			'arrival_date' => Carbon::createFromFormat('d-m-Y',$request->arrive_date),
			'departure_date' =>Carbon::createFromFormat('d-m-Y',$request->departure_date) ,
			'guest_numbers' => $request->guest_numbers,
			'children' => $request->children,
			'adult' => $request->adult,
			'room_type' => $request->room_type
		];
		session()->put('booking',$reservation_info);
		return view('bookings.guest-info',$reservation_info);
	}


	public function getreserve(){
		return redirect(route('index'));
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
