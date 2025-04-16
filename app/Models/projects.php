<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'category',
        'image',
        'url',
        'description',
        'created_at',
        'updated_at',
    ];
}
