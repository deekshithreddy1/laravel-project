<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventViewController extends Controller {
   public function view() {
      $users = DB::select('select * from ticketbase1');
      
       
      return view('eventregistrations',['users'=>$users]);

   }



   public function show() {
      $users = DB::select('select * from event_registration');
      
       
      return view('event_payment',['users'=>$users]);

   }
}