<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\pageController;


Route::get('/', [pageController::class, 'index']);
Route::get('/ads', [pageController::class, 'ads']);
Route::get('/ads/detail', [pageController::class, 'adsDetail']);



// Route::get('/', function () {
//     return view('website.index');
// });
