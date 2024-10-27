<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
Example: 127.0.0.1:8000/profile
Route::get( '/profile', [ProfileController::class , 'index'] );

^ CON-TROLL-ERS. Good for organisation! :p
Try to use them instead of cramming code inside this file
*/
