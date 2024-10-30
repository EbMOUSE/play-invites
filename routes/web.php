<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/default', function () {
    return view('welcome');
});

Route::get( '/', [MainController::class , 'index'] );

Route::post( '/sign_up', [UserController::class , 'sign_up'] )->name('user.sign_up');

Route::post( '/sign_in', [UserController::class , 'sign_in'] )->name('user.sign_in');

Route::post( '/invite', [InviteController::class , 'store'] )->name('invite.post');

Route::get( '/profile', [ProfileController::class ,'index'] );

/*
Example: 127.0.0.1:8000/profile
Route::get( '/profile', [ProfileController::class , 'index'] );

^ CON-TROLL-ERS. Good for organisation! :p
Try to use them instead of cramming code inside this file
*/
