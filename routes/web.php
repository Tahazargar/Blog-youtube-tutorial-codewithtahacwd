<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\TagController as AdminTagController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Posts
Route::prefix('/posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts');
    Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
});

// Category and Tag Routes
Route::get('/categories/{category}', [CategoryController::class, 'category'])->name('category');
Route::get('/tags/{tag}', [TagController::class, 'tag'])->name('tag');


// Admin Routes
Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/posts', AdminPostController::class)->names('posts');
    Route::resource('/categories', AdminCategoryController::class)->names('categories');
    Route::resource('/tags', AdminTagController::class)->names('tags');
    Route::resource('/users', UserController::class)->names('users');
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
});




