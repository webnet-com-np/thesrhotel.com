<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function testMail(){

    	// $user = User::findOrFail(4);
    	$user = [];
        $message = '';
        \Mail::send('emails.test',$user, function ($message) {
            $message->from('thesrhotel@gmail.com', 'The SR HHotel');
            $message->to('sohanmax02@gmail.com');
            $message->subject('Thank you');
        });
    }
}
