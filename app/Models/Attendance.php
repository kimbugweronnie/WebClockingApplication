<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

public $table='attendance';
public $timestamps = false;
    protected $fillable = [
        'name','timeIn','timeOut','date','email'

    ];
}
?>
