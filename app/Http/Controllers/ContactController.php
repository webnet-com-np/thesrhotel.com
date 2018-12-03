<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

	public function send(){
		Mail::to('bzung231@gmail.com')->send(new Contact());
	}


}
