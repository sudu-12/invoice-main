<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome')->with('inno',"")->with('indate',"");
});
Route::post('/frmse',[main::class,'frmse'])->name('frmse');
