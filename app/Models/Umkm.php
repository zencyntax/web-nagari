<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'umkm_category_id',
        'nama',
        'slug',
        'pemilik',
        'logo',
        'foto',
        'deskripsi',
        'alamat',
        'telepon',
        'email',
        'website',
        'facebook',
        'instagram',
        'tiktok',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(UmkmCategory::class, 'umkm_category_id');
    }

    // Dipakai nanti saat membuat galeri UMKM
    public function galleries()
    {
        return $this->hasMany(UmkmGallery::class);
    }
}
