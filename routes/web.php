<?php

use App\Models\Invite;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Auth
Route::get('/dashboard', [DashboardController::class , 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Custom
Route::post( '/invites', [InviteController::class , 'store'] )->name('invite.create');

Route::get( '/invites/{invite}', [InviteController::class, 'show'] )->name('invite.show');

Route::get( '/games', [GameController::class , 'index'] )->name('game.index');
//Route::post('/invites/{invite}/comments', [CommentController::class, 'store'])->name('invite.create');
