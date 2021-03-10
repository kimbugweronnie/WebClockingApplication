<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Http\Controllers\csvController;
use DB;
// use Excel;

class ExportExcelController extends Controller
{


  public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

  function excel()
  {
    $newCsv= new csvController();
    $filters=$newCsv->index();
  # $customer_data = DB::table('tbl_customer')->get()->toArray();
   $record_array[] = array('id', 'name', 'timeIn', 'timeOut', 'date','email');
   foreach($filters as $record)
   {
    $record_array[] = array(
     'id'  => $record->id,
     'name'  => $record->name,
     'timeIn'  => $record->timeIn,
      'timeOut'  => $record->timeOut,
       'date'  => $record->date,
        'email'  => $record->email,

    );
   }
   #return  $record_array;
   #here

   Excel::download/Excel::store($record_array);
   // Excel::create('Customer Data', function($excel) use ($record_array){
   //  $excel->setTitle('Customer Data');
   //  $excel->sheet('Customer Data', function($sheet) use ($record_array){
   //   $sheet->fromArray($record_array, null, 'A1', false, false);
   //  });
   // })->download('xlsx');
  }
}
