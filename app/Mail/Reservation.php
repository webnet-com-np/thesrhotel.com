<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Reservation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('bookings.bookingmail',
	        [
	        	'phone'=>$request->phone,
		        'name'=>$request->full_name,
		        'email'=>$request->email_from,
	            'arrival_date' => session('booking.arrival_date'),
		        'departure_date' => session('booking.departure_date'),
		        'guest_numbers' => session('booking.guest_numbers'),
		        'adult_numbers' => session('booking.adult'),
		        'child_numbers' => session('booking.children'),
		        'room_type' => session('booking.room_type'),

	        ])
		        ->subject('Booking Inquiry');
    }
}
