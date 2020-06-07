<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    //

    function index(){
        return view('layouts/contact');
    }

    public function store(ContactRequest $request)
    {

        $new_contact = new Contact;
        $new_contact->setAttribute('contact_name', $request->nom);
        $new_contact->setAttribute('contact_email', $request->email);
        $new_contact->setAttribute('contact_message', $request->message);
        $new_contact->save();


        return view('layouts/confirm', array('new_contact' => $new_contact));
    }
}
