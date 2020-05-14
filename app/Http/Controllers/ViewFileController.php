<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ViewFileController extends Controller
{
    public function preview() {
      $users = DB::select('select * from files');
      return view('view',['users'=>$users]);
   }
}
