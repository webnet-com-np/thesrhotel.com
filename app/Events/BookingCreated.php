<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class BookingCreated
{
    use Dispatchable, SerializesModels;
    
    public $booking;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
        \Log::info('Event Fired');
    }

   
}
