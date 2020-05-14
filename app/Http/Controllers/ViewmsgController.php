<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ViewmsgController extends Controller
{
   public function preview() {
      $users = DB::select('select * from sendmsgs');
      return view('viewmessages2',['users'=>$users]);
}
}
