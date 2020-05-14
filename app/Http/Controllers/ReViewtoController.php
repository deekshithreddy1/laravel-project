<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ReViewtoController extends Controller
{
     public function display() {
      $users = DB::select('select * from reuploadfiles');
      return view('reuploadfile2',['users'=>$users]);
   }
}
