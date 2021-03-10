<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use Auth;

use Illuminate\Http\Request;

class checkOutController extends Controller
{

  public function checkout(){


    try {
       $email=Auth::user()->email;
       $type=Auth::user()->type;
       $date=date("l,d/M/Y");
        $response=Attendance::where('email',$email)->where('date',$date)->first();
        $time= date('H:i:s', strtotime('3 hours'));
        $timeOut = $time . "Hrs";
        $response->timeOut = $timeOut;
       $response->save();
         if($type=='Admin'){
        return view('home');
      }else{
        return view('userhome');
      }
    } catch (\Exception $e) {

    }



       #$response->save();

      #return view('home')



    }

function show()
{
  // code...
}
}
