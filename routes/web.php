<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// here we define the routes of our website pages.
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('ideas',IdeaController::class)->except(['index','create','show'])->middleware('auth');

Route::resource('ideas',IdeaController::class)->only(['show']);

Route::resource('ideas.comments',CommentController::class)->only(['store'])->middleware('auth');

Route::resource('users',UserController::class)->only(['show','edit','update'])->middleware('auth');

// Route::get('/profile', [ProfileController::class, 'index']);

// Route::get('/terms', [TermsController::class, 'index']);

// Route::get('/login', [LoginController::class, 'index']);










