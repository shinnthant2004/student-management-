<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[StudentController::class,'index']);
Route::get('/create',[StudentController::class,'show']);
Route::post('/createStudent',[StudentController::class,'create']);

Route::get('/edit/{student}',[StudentController::class,'edit']);
Route::post('/editStudent/{student}',[StudentController::class,'editing']);

Route::get('/delete/{student}',[StudentController::class,'destroy']);

Route::get('/details/{student}',[StudentController::class,'detail']);
