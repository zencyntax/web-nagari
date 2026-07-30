<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = [
        'nama_jabatan',
        'urutan',
    ];

    public function perangkats()
{
    return $this->hasMany(Perangkat::class);
}
}
