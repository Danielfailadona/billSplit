<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::get('/', fn() => view('login'))->name('login');
Route::get('/login', fn() => view('login'))->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/test-if', fn() => view('test-if'));
Route::get('/test-input', function () {
    return view('test-input');
});
Route::post('/test-input', function (\Illuminate\Http\Request $request) {
    $name = trim($request->input('name'));
    
    if (empty($name)) {
        return redirect('/test-input?error=1');
    }
    
    return redirect('/test-input?name=' . urlencode($name));
});
Route::get('/register', fn() => view('register'));
Route::post('/register', [UserController::class, 'register']);
Route::get('/guest-login', fn() => view('guest-login'));
Route::post('/guest-login', [UserController::class, 'guestLogin']);

// Protected routes
Route::get('/dashboard', fn() => view('dashboard'))->middleware('auth');
Route::get('/dashboard-standard', [DashboardController::class, 'standard'])->middleware('auth');
Route::get('/dashboard-guest', [DashboardController::class, 'guest'])->middleware('auth');
Route::get('/dashboard-premium', [DashboardController::class, 'premium'])->middleware('auth');

// Logout
Route::post('/logout', function ($request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});