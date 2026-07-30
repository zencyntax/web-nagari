<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $fillable = [
        'jabatan_id',
        'nama',
        'foto',
        'status',
        'urutan',
    ];

    protected $casts = [
        'status' => 'boolean',
        'urutan' => 'integer',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
