<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    if (Auth::check()) 
        return redirect()->route('dashboard',Auth::user()->name);
    
    return view('welcome');

})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/@{username}', [PageController::class, 'dashboard'])->name('dashboard');
    Route::post('/create-link', [PageController::class, 'createLink'])->name('createLink');
    Route::delete('/delete-link/{link}',[PageController::class, 'deleteLink'])->name('deleteLink');

});

Route::get('/login', function () {
    return redirect()->route('home');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
