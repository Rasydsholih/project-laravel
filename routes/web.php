<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[HomeController::class, 'home']);

Route::get('/about',[HomeController::class, 'about']);

Route::get('/countact', [HomeController::class, 'countact']);

