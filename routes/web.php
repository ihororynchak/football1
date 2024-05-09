<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Sportmonks\Soccer\SoccerApi;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/team/{id}', [\App\Http\Controllers\HomeController::class, 'teamSquads'])->name('team.squads');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
