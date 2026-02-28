<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

// Show standalone login page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Handle login POST
Route::post('/login', [UserController::class, 'login']);

// Show registration page
Route::get('/register', function () {
    return view('register');
});

// Handle registration POST
Route::post('/register', [UserController::class, 'register']);

// Dashboard - only for authenticated users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Dashboard - Standard User
Route::get('/dashboard-standard', function () {
    return view('dashboard-standard');
})->middleware('auth');

// Dashboard - Guest User
Route::get('/dashboard-guest', function () {
    return view('dashboard-guest');
})->middleware('auth');

// Dashboard - Premium User
Route::get('/dashboard-premium', function () {
    return view('dashboard-premium');
})->middleware('auth');

// Logout route
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});
   