<?php
use Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navbarController extends Controller
{
  public function logout()
  {
    return view('auth.login');
  }
  public function report()
  {
    return view('report');
  }
  public function user()
  {
    return view('users');
  }
}
