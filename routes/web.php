<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Public Controller
Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/form', [PublicController::class, 'form'])->name('form');

// Post Controller
Route::get('/folder/posts', [PostController::class, 'posts'])->name('posts');

Route::post('/post/create', [PostController::class, 'store'])->name('post.store');


