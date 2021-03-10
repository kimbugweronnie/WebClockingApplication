<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exportController extends Controller
{
    public function export()
    {

      require 'php-excel.class.php';
      $data = array(
        0 => array('Nr.', 'Name', 'E-Mail'),
        array(1, 'Oliver Schwarz', 'oliver.schwarz@gmail.com'),
        array(2, 'Hasematzel', 'hasematzel@gmail.com'));

$xls = new Excel_XML;
$xls->addWorksheet('Names', $data);
$xls->sendWorkbook('test.xml');
    }
}
