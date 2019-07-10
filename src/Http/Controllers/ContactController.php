<?php

namespace Carter\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carter\Contact\Models\Contact;
use Carter\Contact\Mail\ContactMailable;
use Mail;
class ContactController extends Controller
{
   public function index()
   {
   	return view('contact::contact');
   }

   public function send(Request $request)
   {
   		Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
   		Contact::create($request->all());
   		return redirect()->route('contact');
   }
}
 