<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();


Route::get('/', function () {
    return view('/auth/login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homeSim', [App\Http\Controllers\HomeController::class, 'index'])->name('homeSim');
