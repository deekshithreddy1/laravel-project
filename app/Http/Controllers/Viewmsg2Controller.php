<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class Viewmsg2Controller extends Controller
{
   public function preview() {
     // $users = DB::select('select * from sendmsgs')->where('upload','second');

      $users = DB::table('sendmsgs as s')
         
          
              ->where('s.upload', '=', 'second')
              ->paginate(12);
      return view('viewmessages2',['users'=>$users]);
}
}
