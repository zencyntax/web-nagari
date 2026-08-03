<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [

        'title',

        'slug',

        'thumbnail',

        'excerpt',

        'content',

        'author',

        'views',

        'status',

        'published_at',

    ];
}
