<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
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
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return $this
	 */
    public function build(Request $request)
    {

        return $this->view('mail',['msg'=>$request->comment,'name'=>$request->full_name,'email'=>$request->email_from])
	        ->subject('Contact Inquiry');
    }
}
