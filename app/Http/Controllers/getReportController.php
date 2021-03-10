<?php

namespace App\Http\Controllers;
use App\Models\Attendance;

use Illuminate\Http\Request;

class getReportController extends Controller
{
    public function adminreport()
    {
        $records=Attendance::all();
        $date=date("M/Y");
        $filter=[];
        foreach($records as  $record) {
            if(strpos($record['date'], $date) == true){
                   array_push($filter,$record);

                      }

              }
     return  view('report',['records'=>$filter]);

      }

    }
