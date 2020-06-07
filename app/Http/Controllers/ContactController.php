<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    //

    public function index(){
        return view('layouts/contact');
    }

    public function store(ContactRequest $request)
    {
        // Enregistre un nouveau contact si la request est valide
        $new_contact = new Contact;
        $new_contact->setAttribute('contact_name', $request->nom);
        $new_contact->setAttribute('contact_email', $request->email);
        $new_contact->setAttribute('contact_message', $request->message);
        $new_contact->save();

        // Retourne un écran de validation
        return view('layouts/contact_confirm', array('new_contact' => $new_contact));
    }
}
