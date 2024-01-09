<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Alert;

class ContactFormController extends Controller
{

   
    public function store(){
        $contact_form_data = request()->all();
        Mail::to('mail.w3web@gmail.com')->send(new ContactFormMail($contact_form_data));
        // return redirect()->with('message', 'Your Message Sent Successfully!');
        return back()->with('$message', 'Message Sent Successfully'); 
        
 }
     
    

}



