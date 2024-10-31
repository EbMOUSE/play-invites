<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InviteController;
use Illuminate\Support\Facades\Route;

Route::get('/burp', function () {
    return view('main');
});

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

Route::get( '/invite', [InviteController::class ,'show'] )->name('invite.show');

Route::post( '/invite', [InviteController::class , 'store'] )->name('invite.create');

Route::get( '/comment', [CommentController::class, 'show'] )->name('invite.comment.create');

require __DIR__.'/auth.php';
