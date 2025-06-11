<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show()
    {
         return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->take(10)->paginate(21)->withQueryString()]);
    }

    public function showPost(Post $post)
    {
        return view ('post', ['title' => 'Single Post', 'post' => $post]);
    }

    public function showAuthorPosts(User $user)
    {
        return view('posts', ['title' => 'Article by' . $user->name, 'posts' => $user->posts]);
    }

    public function showCategoryPosts($category)
    {
       return view('posts', ['title' => 'Article in Category :' . $category->name, 'posts' => $category->posts]);
    }
}
