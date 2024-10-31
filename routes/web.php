<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

// temp
Route::get('/burp', function () {
    return view('main');
});

// Authentication
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Custom
Route::get( '/invites', [InviteController::class ,'show'] )->name('invite.show');

Route::post( '/invites', [InviteController::class , 'store'] )->name('invite.create');

Route::get( '/comments', [CommentController::class, 'show'] )->name('invite.comment.create');

Route::post('/invites/{invite}/comments', [CommentController::class,''] )->name('invite.comment.create');
