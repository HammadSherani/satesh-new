<?php

use App\Http\Controllers\Admin\AdController as AdminAdController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AdController;
use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\website\pageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\RoleMiddleware;

require __DIR__ . '/auth.php';
Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('login');
});
Route::middleware(['auth', RoleMiddleware::class . ':admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index']);
    Route::get('users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('ads', [AdminAdController::class, 'index'])->name('admin.ads.index');
});
Route::middleware(['auth', RoleMiddleware::class . ':user'])->prefix('user')->group(function () {
    Route::get('dashboard', [UserHomeController::class, 'index']);
    Route::get('users', [AdminUserController::class, 'index'])->name('users.index');
    Route::resource('ads', AdController::class);
    // Route::get('ads', [AdminAdController::class, 'index'])->name('users.ads.index');
});
Route::get('/get-cities', [pageController::class, 'getCities']);




Route::get('/', [pageController::class, 'index']);
Route::get('/ads', [pageController::class, 'adsManage']);
Route::get('/{category}/{state?}/{city?}', [pageController::class, 'ads']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    // Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
