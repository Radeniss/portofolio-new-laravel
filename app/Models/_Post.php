<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
    // public static function find($slug): array
    // {
    //     // return Arr::first(static::all(), function ($post) use ($slug) {
    //     //     return $post['slug'] == $slug;
    //     // });

    //     $post = Arr::first(static::all(), fn($post) => $post['slug'] === $slug);

    //     if (! $post) {
    //         abort(404);
    //     }

    //     return $post;
    // }
}
