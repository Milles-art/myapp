<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

public function store(Request $request){
    //validate
     $request->validate(
        [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]
    );

    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'message'=> $request->message, 
    ]);
    return redirect('/contact')->with('success','Saved Successfuly');
}

}