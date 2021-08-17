<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact->name = $req->input('userName');
        $contact->phone = $req->input('userPhone');
        $contact->email = $req->input('userEmail');
        $contact->country = $req->input('userCountry');
        $contact->message = $req->input('userMessage');
        $contact->save();
        return redirect()->back()->with(['success_contact'=>"success_contact"]);
    }
}
