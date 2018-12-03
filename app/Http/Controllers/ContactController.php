<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
//use App\Notifications\InboxMessage;
use Illuminate\Http\Request;
//use App\Http\Requests\ContactFormRequest;
//use App\Admin;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function mail(Request $request ){
	    Mail::to('bzung231@gmail.com')->send(new Contact());

    }

}
