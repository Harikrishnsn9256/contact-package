<?php

namespace  hari\contact\Http\Controllers;

use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use hari\contact\Models\Contact;
use hari\contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
    	return view ('contact::contact');
    }

    public function send(Request $request)
    {
    	Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
    	Contact::create($request->all());
    	return redirect(route('contact'));
    }
}
