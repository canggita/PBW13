<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Field yang dapat diisi (mass assignable)
    protected $fillable = [
        'title',
        'content',
    ];
}
