<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileMission extends Model
{
    protected $fillable = [

        'profile_id',

        'isi',

        'urutan',

    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
