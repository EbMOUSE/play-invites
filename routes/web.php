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
Route::get('/dashboard', function () {
        $invites = DB::table('invites')->get();
        return view( 'dashboard', [
            'invites' => Invite::orderBy('created_at', 'desc')->paginate(10),
        ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Custom
Route::post( '/dashboard', [InviteController::class , 'store'] )->name('invite.create');

Route::get( '/games', [GameController::class , 'index'] )->name('game.index');

//Route::post('/invites/{invite}/comments', [CommentController::class, 'store'])->name('invite.create');
