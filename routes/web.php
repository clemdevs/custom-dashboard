<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/configure/{id}', [DashboardController::class, 'edit'])->name('button.edit');
Route::post('/configure/{id}', [DashboardController::class, 'update'])->name('button.update');
