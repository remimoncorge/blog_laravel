<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //

    function index(){
        return view('layouts/contact');
    }

    public function store(ContactRequest $request)
    {
        $message = 'formulaire OK';

        var_dump($request->nom);
        if (!$request->nom) {
            $message = 'formulaire not OK';
            return redirect()->back()->with('error_message', $message);
        }




        return redirect()->back()->with('success_message', $message);
    }
}
