<?php

use App\Http\Controllers\storeProducts;
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

Route::get('/',[storeProducts::class,'home'] )->name('home');
Route::get('/create', [storeProducts::class,'create'])->name('create');
Route::get('/product/{id}',[storeProducts::class,'showindi'])->name('indi');
Route::post('/store', [storeProducts::class,'store'])->name('store');
Route::get('/delete/{id}',[storeProducts::class,'delete'])->name('delete');


