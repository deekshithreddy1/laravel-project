<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reuploadfile; // model name
use Illuminate\Support\Facades\Mail;
use App\Mail\reupload;

class ReuploadController extends Controller
{
    
    public function showreupload()
    {
    	return view('reupload'); //view file name
    }
public function storereuploadfile(request $request)
    {

    	if($request->hasFile('file')){
        $filename=$request->file->getClientOriginalName();
        $filesize=$request->file->getClientSize();// this return the orginal file name
    	//return $request->file->store('public/upload');// return the file path with the random name of the file
        $uname = $request->input('uname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        

        $request->file->storeAs('public/reuploads',$filename); //path with the file name 
        $file= new Reuploadfile; //model name
        $file->name=$filename;
        $file->size=$filesize;
        $file->uname=$uname;
        $file->email=$email;
        $file->phone=$phone;
        $file->save();
         // $message = 'Event ' . $file->name . ' have been created successfully!!!';
            // return Redirect::route('/home')->with('success',$message);
    	//return 'yes';
        // return '/home';
        // return Redirect::to('/home');
         // return Redirect::route('/home');
         Mail::to($file['email'])->send(new reupload($file));
        

         echo"You have uploaded your file  successfully.<br/>";
        //echo<p><font size="7" color="#00ff00">Font size 7 and Green color</font></p>
        // echo '<a href = "/home">Home</a> to go check events';
    /*    return $redirectTo = ('/home');*/
     // Mail::to($data['email'])->send(new SendMail($data));
     //     return back()->with('success','Your email has Sucessfully sent.....! ');

    return view('welcome');


    }
        
    	 return $request->all();
    	}
    	
    



}
