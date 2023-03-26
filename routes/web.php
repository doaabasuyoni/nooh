<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagehome;
use  App\Http\Controllers\newall;
use  App\Http\Controllers\advertisements;
use  App\Http\Controllers\changeimage;
use  App\Http\Controllers\student;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/HomePage',[pagehome::class,'index'] )->name('HomePage');
Route::resource('/new',newall::class);
Route::resource('/advertisements',advertisements::class);
Route::get('/changimage',[changeimage::class,'index'] )->name('changeimage');
Route::post('/editchangimage', [changeimage::class, 'editData'])->name('sendData');
Route::get('/profilestudent',[student::class,'index'] )->name('student');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
