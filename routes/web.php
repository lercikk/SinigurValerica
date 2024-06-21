<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


//Guest
Route::get('/', [GuestController::class, 'index'])->name('guest.index');
Route::get('/news/{news}', [GuestController::class, 'show'])->name('guest.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
