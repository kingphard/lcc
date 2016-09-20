<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

class ContactController extends Controller
{

 public function create(Request $request)
    {   
        $contact =  new Contact();
        $fname = $request->input('fname');
        $lname = $request->input("lname");
        $email = $request->input("email");
        $subject = $request->input("subject");
        $message = $request->input("message");
		$contact->fname =  $fname;
        $contact->lname =  $lname;
        $contact->email =  $email;
        $contact->subject = $subject;
        $contact->message = $message;
        $saved=$contact->save();
        if($saved){
            return "Message Sent";
        }
        else
        {
            return "Message not sent";
        }
    
    }
    public function readAll()
    {
        $readmessage = Contact::all();
        if($readmessage)
        {
            return "$readmessage";
        }
        else
        {
            return "Message not found";
        }
    }
    public function readOne($id)
    {
        $readSpecialMsg = Contact::find($id);
        if($readSpecialMsg)
        {
            return "$readSpecialMsg";
        }
        else
        {
            return "cannot find message";
        }
    }
    public function edit(Request $request, $id)
    {
        $messageToEdit = Contact::find($id);
        if($messageToEdit)
        {
        $fname = $request->input('fname');
        $lname = $request->input("lname");
        $email = $request->input("email");
        $subject = $request->input("subject");
        $message = $request->input("message");
        $contact->fname =  $fname;
        $contact->lname =  $lname;
        $contact->email =  $email;
        $contact->subject = $subject;
        $contact->message = $message;
        $saved=$contact->save();

        }
        else
        {
            return "message not update";
        }
    }
    public function delete($id)
    {
        $messageToDelete = Contact::find($id);
        $deletedmsg = $messageToDelete->delete();
        if($deletedmsg)
        {
            return "message deleted";
        }
        else
        {
            return "message not deleted";
        }
    }
}
