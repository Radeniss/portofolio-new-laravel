<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/posts', function () {
    // $posts = post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});



Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => 'Article by' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => 'Article in Category :' . $category->name, 'posts' => $category->posts]);
});
