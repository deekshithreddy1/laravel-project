<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ViewreuploadsController extends Controller
{
    public function display() {
      $users = DB::select('select * from reuploadfiles');
      return view('reuploadfiles',['users'=>$users]);
   }
}



