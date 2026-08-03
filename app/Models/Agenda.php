<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'description',
        'location',
        'date',
        'time',
        'status',
    ];
}
