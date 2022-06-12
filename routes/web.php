<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\listcontroller;
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

Route::get('/home',[listcontroller::class,'index'])->name('home');
Route::post('/authentification' , [listcontroller::class , 'form'])->name('login');
Route::get('/liste',[listcontroller::class,'show'])->name('liste');

Route::get('/liste/add',[listcontroller::class,'create'])->name('ajout');
Route::post('/liste/add/check',[listcontroller::class,'store'])->name('check_add');

Route::get('/liste/delete/{id}',[listcontroller::class,'destroy'])->name('delete');
Route::get('/liste/formedit/{id}',[listcontroller::class,'form_modify_user'])->name('formedit');
Route::post('/liste/modify/check/modify/{id}', 'App\Http\Controllers\listcontroller@edit')->name('check_modify_form');
Route::get('/liste/modify/check/modify/{id}', 'App\Http\Controllers\listcontroller@edit')->name('check_modify_form');