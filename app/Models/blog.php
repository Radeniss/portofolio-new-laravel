<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['name', 'description', 'image', 'slug'];
}
