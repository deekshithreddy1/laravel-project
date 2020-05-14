<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudViewController extends Controller {
   public function show() {
      $users = DB::select('select * from users');
      return view('users',['users'=>$users]);
   }



   public function role() {
      $users = DB::select('select * from users');

      // $users = DB::table('users as u')
      // ->where('u.role','=','review')
      // ->paginate(12);

      return view('roleupdate',['users'=>$users]);



   }
}