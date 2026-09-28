<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');

Route::get('read-more/{id}', [App\Http\Controllers\FrontController::class, 'readMore'])->name('read.more');

Route::get('admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.index');
