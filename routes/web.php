<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/contact', 'contact');

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Routes with auth middleware
Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard');
    Route::resource('projects', ProjectController::class);
});


