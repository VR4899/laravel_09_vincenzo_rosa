<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/form', [PublicController::class, 'form'])->name('form');
Route::post('/post/create', [PostController::class, 'store'])->name('post.store');


Route::get('/folder/posts', [PostController::class, 'posts'])->name('posts');
