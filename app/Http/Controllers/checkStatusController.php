<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Attendance;
use App\Models\User;

class checkStatusController extends Controller
{
  public function useroles(Request $request)
  {


          $email=request("email");



          $date=date("l,d/M/Y",strtotime('3 hours'));
           $records1= User::where('email', $email)->get();
         // $records2= Attendance::where('name', $records1[0]['name'])->get();
         // $record= Attendance::where('date',$date)->get();;

          return $records1;
          // if($record['timeOut']=='Working'){
          //   return view('checkout');
          // }else{
          //   return view('checkIn');
          // }
  }
}
