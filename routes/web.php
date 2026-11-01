<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');

Route::get('read-more/{id}', [App\Http\Controllers\FrontController::class, 'readMore'])->name('read.more');

Route::get('posts-category/{category_id}', [App\Http\Controllers\FrontController::class, 'postCategory'])->name('posts.category');


Route::group(['middleware'=>['auth','admin_or_staff'], 'prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);

});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
