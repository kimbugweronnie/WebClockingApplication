<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Attendance;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $email=Auth::user()->email;
      $type=Auth::user()->type;
      $time= date('H:i:s', strtotime('3 hours'));
      $date=date("l,d/M/Y");


        $records=Attendance::where('email',$email)->where('date',$date)->first();
        if($type=='Admin'){
        if($records['timeOut']=='Working'){
                return view('checkout');
                }else{
                 return view('home');
               }
}else{
  if($records['timeOut']=='Working'){
          return view('user-checkout');
          }else{
           return view('userhome');
         }
}

//here
}
}
