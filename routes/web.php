<?php

use App\Http\Controllers\Location;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[Location::class,'index']);

Route::post('/',[Location::class,'create'])->name('home');
Route::get('/edit/{id}',[Location::class,'edit'])->name('edit');
Route::post('/edit/{id}',[Location::class,'update'])->name('update');
Route::get('/delete/{id}',[Location::class,'delete'])->name('delete');
