<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('home', [
        'posts' => Post::latest()
            ->filter(request(['search', 'category', 'author']))
            ->paginate(3) // Atur jumlah sesuai kebutuhan
            ->withQueryString()
    ]);
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/posts', [BlogController::class, 'show']);
Route::get('/posts/{post:slug}', [BlogController::class, 'showPost']);
Route::get('/authors/{user:username}', [BlogController::class, 'showAuthorPosts']);
Route::get('/categories/{category:slug}', [BlogController::class, 'showCategoryPosts']);
