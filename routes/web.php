<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/posts', function () {
    return view('posts', ['posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    // $post = Post::find($slug);
    return view('posts', ['title' => 'Article by'.$user->name, 'posts' => $user->posts]);
});
