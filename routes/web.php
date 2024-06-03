<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubtitleController;
use App\Http\Controllers\AdminController;


Route::get('/', [CategoryController::class, 'liste']);
Route::get('/subtitle', [CategoryController::class, 'subtitle']);
Route::get('/admin', [AdminController::class, 'admin_index']);
