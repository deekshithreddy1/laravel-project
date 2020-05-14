<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class Viewmsg3Controller extends Controller
{
   public function preview() {
     // $users = DB::select('select * from sendmsgs')->where('upload','second');

      $users = DB::table('sendmsgs as s')
         
          
              ->where('s.percent', '>=', '8' )
              ->paginate(12);
      return view('viewmessages2',['users'=>$users]);
}
}
