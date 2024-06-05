<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;


// here we define the routes of our website pages.
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/idea', [DashboardController::class, 'index'])->name('idea.index');
Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');

Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');

Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');

Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');

Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('ideas.destroy');

Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('ideas.comments.store');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

// Route::get('/profile', [ProfileController::class, 'index']);

// Route::get('/terms', [TermsController::class, 'index']);

// Route::get('/login', [LoginController::class, 'index']);










