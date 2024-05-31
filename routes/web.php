<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TermsController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;


// here we define the routes of our website pages.
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/idea', [DashboardController::class, 'index'])->name('idea.index');
Route::post('/idea', [IdeaController::class, 'store'])->name('idea.crate');

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/terms', [TermsController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);









