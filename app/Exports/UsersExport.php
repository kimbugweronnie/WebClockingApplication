<?php

namespace App\Exports;

use App\User;
use App\Models\Attendance;
use App\Http\Controllers\csvController;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $newCsv= new csvController();
        $filters=$newCsv->index();
        return $filters;
        // return Attendance::all();

    }
}
