<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\review;



class SendmsgController extends Controller
{
public function message(){
return view('sendmsg');  
}

public function insert(Request $request)

{
   $this->validate($request,[
    		'name' => 'required',
            'email' => 'required|string|email|max:255',
            'upload' => 'required',
            'message' => 'required|string|max:255',
            'percent' => 'required',
          
    	]);
   {
            
             $name = $request->input('name');
             $email = $request->input('email'); 
             $upload = $request->input('upload');
             $message = $request->input('message');
             $percent = $request->input('percent'); 


             $data=array("name"=>$name,"email"=>$email,"upload"=>$upload,'message'=>$message,"percent"=>$percent);
DB::table('sendmsgs')->insert($data);
echo"You message has be send sucess fully successfully.<br/>";
// Mail::to($data['email'])->send(new SendMail($data));
//     	 return back()->with('success','Your email has Sucessfully sent.....! ');
// echo '<a href = "/home">Home</a> to go check events';
 Mail::to($data['email'])->send(new review($data));
 return view('sendmsg');

}
}
}