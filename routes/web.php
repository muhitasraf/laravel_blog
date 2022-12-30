<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BackendController;

Route::get('/', [BackendController::class, 'index']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'porcessRegistration']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'porcessLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/profile', [DashBoardController::class, 'profile'])->name('profile');
    Route::get('/dashboard/profile/edit', [DashBoardController::class, 'editProfile'])->name('edit_profile');

    Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/category/add', [CategoryController::class, 'add'])->name('categories.add');
    Route::post('/category/save', [CategoryController::class, 'save'])->name('categories.save');
    Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/category/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

    Route::get('/post', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/save', [PostController::class, 'save'])->name('post.save');
    Route::get('/post/show/{id}', [PostController::class, 'show'])->name('post.show');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/post/update', [PostController::class, 'update'])->name('post.update');
    Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');

});

Route::get('/post/{post:post_slug}', [PostController::class, 'details'])->name('post.details');
Route::get('/category/{post:category_slug}', [PostController::class, 'categoryWisePost'])->name('post.category_wise');
Route::post('/search', [PostController::class, 'search'])->name('post.search');
