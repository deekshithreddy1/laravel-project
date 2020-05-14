<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\reupload;

class FileController extends Controller
{
    public function showuploadform()
    {
    	return view('upload');
    }

 public function storefile(request $request)
 {
        $this->validate($request,[
            'uname' => 'required',
            'email' => 'required|string|email|max:255|unique:files',
            'phone' => 'required', 'numeric', 'min:11',
            'address' => 'required',
            'filestate' => 'required',
           


        ]);

    {
    	if($request->hasFile('file')){
        $filename=$request->file->getClientOriginalName();
        $filesize=$request->file->getClientSize();// this return the orginal file name
    	//return $request->file->store('public/upload');// return the file path with the random name of the file
        $filestate = $request->input('filestate');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $uname = $request->input('uname');

        $request->file->storeAs('public/upload',$filename); //path with the file name 
        $file= new File;
        $file->name=$filename;
        $file->size=$filesize;
        $file->filestate=$filestate;
        $file->email=$email;
        $file->phone=$phone;
        $file->address=$address;
        $file->uname=$uname;

        $file->save();
         // $message = 'Event ' . $file->name . ' have been created successfully!!!';
            // return Redirect::route('/home')->with('success',$message);
    	//return 'yes';
        // return '/home';
        // return Redirect::to('/home');
         // return Redirect::route('/home');
         Mail::to($file['email'])->send(new reupload($file));

         echo"You have uploaded your file successfully.<br/>";
        //echo<p><font size="7" color="#00ff00">Font size 7 and Green color</font></p>
        // echo '<a href = "/home">Home</a> to go check events';
    /*    return $redirectTo = ('/home');*/
     // Mail::to($data['email'])->send(new SendMail($data));
     //     return back()->with('success','Your email has Sucessfully sent.....! ');

    return view('home');

    }
        
    	 return $request->all();
    	}
    	
    

}
}