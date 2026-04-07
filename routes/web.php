<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPostController;

Route::get('/', [WebPostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [WebPostController::class, 'show'])->name('posts.show');
