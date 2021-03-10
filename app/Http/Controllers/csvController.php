<?php

namespace App\Http\Controllers;
use App\Models\Attendance;

use Illuminate\Http\Request;

class csvController extends Controller
{

  public function index()
  {
    // code...
    $records=Attendance::all();
    $date=date("M/Y");
    $filters=[];
    foreach($records as  $record) {
        if(strpos($record['date'], $date) == true){
               array_push($filters,$record);

                  }

          }
          return $filters;
  }


    }
