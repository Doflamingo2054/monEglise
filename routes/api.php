<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CommentController;

Route::post('/posts', [PostController::class, 'store']); // api-create-post
Route::get('/posts', [PostController::class, 'index']);  // api-list-posts

Route::post('/posts/{post}/comments', [CommentController::class, 'store']); // api-create-comment
Route::get('/posts/{post}/comments', [CommentController::class, 'index']);  // api-list-comments
