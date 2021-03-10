<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navbarController;
use App\Http\Controllers\checkInController;
use App\Http\Controllers\checkOutController;
use App\Http\Controllers\checkStatusController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\getReportController;

use App\Http\Controllers\ExportExcelController;
use App\Http\Controllers\exportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

App\Http\Controllers\Auth\LoginController@login
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();



Route::post('/checkIn',[ checkInController::class, 'checkIn'])->name('checkIn');
Route::get('/checkout',[ checkOutController::class, 'checkOut'])->name('checkOut');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/report',[ getReportController::class, 'adminreport'])->name('adminreport');
Route::get('/csvReport',[ ExportExcelController::class, 'excel'])->name('csvReport');
