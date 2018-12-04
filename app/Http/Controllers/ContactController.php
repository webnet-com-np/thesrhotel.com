<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

	public function send()
	{
		Mail::to('bzung231@gmail.com')->send(new Contact());
		return redirect()
			->route('contact')
			->with(['message' => "Your email has been successfully sent "]);
	}


}
