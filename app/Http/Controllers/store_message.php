<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\message;

class store_message extends Controller
{
    public function store_message(Request $request)
{
 
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Create a new message record
    message::create($validatedData);
   
         return redirect('/')->with('message','Thanks for the message,'.' '.$request->name.'.');

}
}
