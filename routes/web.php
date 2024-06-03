<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubtitleController;
use App\Http\Controllers\AdminController;


Route::get('/', [CategoryController::class, 'liste']);
Route::get('/subtitle', [CategoryController::class, 'subtitle']);
Route::get('/admin', [AdminController::class, 'admin_index']);
Route::get('/all_texts', [AdminController::class, 'table']);
Route::get('/dene', [AdminController::class, 'dene']);
Route::get('/createtext', [AdminController::class, 'createtext']);
Route::post('/createtext', [AdminController::class, 'createtextpost'])->name('createtextpost');
Route::get('/updatetext', [AdminController::class, 'updatetext']);
Route::post('/updatetext', [AdminController::class, 'updatetextpost'])->name('updatetextpost');
Route::post('/delete/{id}', [AdminController::class, 'delete'])->name("textdelete");
