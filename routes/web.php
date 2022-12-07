<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalikController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\formController;


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

//Route::get('/', function () {
   // return view('welcome');
//});


Route::get('/salik',[SalikController::class,'show']);
Route::get('/home',[HomeController::class,'homepage']);
Route::get('/admin',[adminController::class,'adminpage']);
Route::get('/form',[formController::class,'formpage']);