<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $table = 'projects';
    protected $fillable = ['name', 'description', 'image', 'slug'];
}
