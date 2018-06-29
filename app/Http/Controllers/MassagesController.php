<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MassagesController extends Controller
{
    public function submit(Request $request)
    {
    	$this->validate($request , [
    		'name' => 'required',
    		'email' => 'required'
    	]);

    	//Create new massage

    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	//save message
    	$message->save();

    	return redirect('/')->with('success' , 'Message Sent');

    }

    public function getMessages()
    {
        $Messages = Message::all();
        return view('messages')->with('messages' ,$Messages );
    }
}