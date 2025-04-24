<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('admin')->middleware(['auth', 'verified', AdminMiddleware::class])->group(function(){
    
    // route untuk dashboard admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});


// Group untuk user biasa
Route::prefix('user-area')->middleware(['auth', 'verified'])->group(function(){
    
    // route untuk dashboard user
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard.user');


});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});





require __DIR__.'/auth.php';
