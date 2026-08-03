<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileJorong extends Model
{
    protected $fillable = [

        'profile_id',

        'nama',

        'urutan',

    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
