<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

class ContactController extends Controller
{

 public function store(Request $request)
    {   
        $contact =  new Contact();
        $fname = $request->input('fname');
        $lname = $request->input("lname");
        $email = $request->input("email");
        $subject = $request->input("subject");
        $contact = $request->input("contact");
        $contact->fname =  $fname;
        $contact->lname =  $lname;
        $contact->email =  $email;
        $contact->subject =  $subject;
        $contact->message =  $message;
        $contact->save();
       
    return redirect('/')->with('status', 'Message Sent to Admin, check your mail later to receive reply');
    }
}
