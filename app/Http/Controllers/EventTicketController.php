<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class EventTicketController extends Controller
 {
public function ticketpre(){
return view('eventregister.blade');  
}
public function insert(Request $request)

{
    	$this->validate($request,[
    		'name' => 'required',
            'email' => 'required|string|email|max:255|unique:ticketbase1',
            'phone' => 'required', 'numeric', 'min:11',
            'gender' => 'required',
            'college' => 'required|string|max:255',
            'city' => 'required',
            'district' => 'required',
            'state' => 'required',
            'checkbox' => 'required',


    	]);
{
$name = $request->input('name');
$email = $request->input('email');
$phone = $request->input('phone');
$gender = $request->input('gender');
$college = $request->input('college');
$hallticket = $request->input('hallticket');
$department = $request->input('department');
$city = $request->input('city');
$district = $request->input('district');
$state = $request->input('state');
$payment = $request->input('payment');
$checkbox = $request->input('checkbox');
$data=array("name"=>$name,"email"=>$email,"phone"=>$phone,'gender'=>$gender,"college"=>$college,"hallticket"=>$hallticket,"department"=>$department,"city"=>$city,"district"=>$district,"state"=>$state,"payment"=>$payment,"checkbox"=>$checkbox);
DB::table('ticketbase1')->insert($data);

echo"You have registered successfully.<br/>";
// Mail::to($data['email'])->send(new SendMail($data));
//     	 return back()->with('success','Your email has Sucessfully sent.....! ');
// echo '<a href = "/home">Home</a> to go check events';
 return view('home');

}
}
}