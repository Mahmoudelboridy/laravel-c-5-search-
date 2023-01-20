<?php

use App\Http\Controllers\sscontroller;
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

Route::GET('/',[sscontroller::class,'ss']);
Route::GET('/fs',[sscontroller::class,'Fs']);
Route::GET('/search',[sscontroller::class,'search'])->name('search');
Route::GET('/uu',[sscontroller::class,'uu']);
Route::GET('/vn',[sscontroller::class,'vn'])->name('post');