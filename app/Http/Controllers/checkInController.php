<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Attendance;

use Illuminate\Http\Request;

class checkInController extends Controller
{

  public function Checking()
  {
    $email=Auth::user()->email;
    $date=date("l,d/M/Y",strtotime('3 hours'));
    $response=Attendance::where('email',$email)->where('date',$date)->first();

    if($response->timeOut!=='Working' && $response->date==$date ){
         return view('home')->with(['attendance'=>'You have already signed in']);
          }else{
            return redirect('/checkin');
          }

  }
    public function checkIn()
    {
      $name=Auth::user()->name;
      $email=Auth::user()->email;
      $type=Auth::user()->type;
      $time= date('H:i:s', strtotime('3 hours'));
      $date=date("l,d/M/Y",strtotime('3 hours'));
      $label = "Hrs";

      $timeIn = $time . "Hrs";
      $timeOut='Working';

        $payload=[
          'name'=>$name,
          'timeIn'=>$timeIn,
          'timeOut'=>$timeOut,
          'date'=>$date,
          'email'=>$email
        ];


       $response=Attendance::where('email',$email)->where('date',$date)->first();
       if($type=='Admin'){
       if($response['timeOut']!=='Working' && $response['date']==$date ){
         return view('home')->with(['notification'=>'You have already signed in']);
       }else{
         $attendance=Attendance::create($payload);
         return view('checkout')->with(['attendance'=>$attendance]);
       }
}else{
  if($response['timeOut']!=='Working' && $response['date']==$date ){
    return view('userhome')->with(['notification'=>'You have already signed in']);
  }else{
    $attendance=Attendance::create($payload);
    return view('user-checkout')->with(['attendance'=>$attendance]);
  }

}

//.....
    }

}
