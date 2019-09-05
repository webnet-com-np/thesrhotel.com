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
		return redirect('thank-you');
	}
	//sends email from guest-info for reservation

	public function mail(Request $request){


		$booking = new \stdClass;
		$booking->arrival_date 		= 	 $request->input('arrival_date');
		$booking->departure_date 	=	 $request->input('departure_date');
		$booking->children 			=	 $request->input('children');
		$booking->adult 			=	 $request->input('adult');
		$booking->room_type 		=	 $request->input('room_type');
		$booking->full_name 		=	 $request->input('full_name');
		$booking->email_from 		=	 $request->input('email_from');
		$booking->phone 			=	 $request->input('phone');
		$booking->message 		  	=	 $request->input('message');
		


		try{
			event(new \App\Events\BookingCreated($booking));
			return redirect('thank-you?success#message')->with('success','Booking request sent successfully!');
		}catch(\Exception $e){
			return redirect('thank-you?failed#message')->with('error','Something went wrong. Please try again later!');
		}


		

	}


}
