<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class certificates extends Model
{
    protected $table = 'certificates';
    protected $fillable = ['name', 'description', 'image'];
}
