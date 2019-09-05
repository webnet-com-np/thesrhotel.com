<?php

namespace App\Listeners;

use App\Events\BookingCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBookingReceivedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BookingCreated  $event
     * @return void
     */
    public function handle(BookingCreated $event)
    {
        //
        // $user = User::findOrFail(4);
        $data = ['booking'=>$event->booking];
        $message = '';
        \Mail::send('emails.booking', $data, function ($message) use($event) {
            $message->from($event->booking->email_from, $event->booking->full_name);
            $message->to('thesrhotel@gmail.com');
            $message->subject('New Booking Received From Website');
        });

        \Mail::send('emails.booking-received', $data, function ($message) use($event) {
            $message->from('thesrhotel@gmail.com', 'The SR Hotel');
            $message->to($event->booking->email_from);
            $message->subject('Booking Received: The SR Hotel');
        });
    }
}
