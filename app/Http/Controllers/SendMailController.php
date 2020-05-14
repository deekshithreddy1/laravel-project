<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    function index()
    {
    	return view('send_email');
    }

    function send(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'email'=> 'required|email',
    		'message' => 'required',

    	]);
    	$data=array(
    		'name' => $request->name,
    		'message' => $request->message,
    		'email' => $request->email
    	);
    	 // Mail::send('emails',$data,function($message)use($data)
    	 // {
    	 // 	$message->to($data['email']);
    	 // 	$message->from('deekshith.karka@gmail.com');

    	 // });


    	 Mail::to($data['email'])->send(new SendMail($data));
    	 return back()->with('success','Your email has Sucessfully sent.....! ');
    } 
}
