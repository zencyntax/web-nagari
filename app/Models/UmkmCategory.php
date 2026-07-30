<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UmkmCategory extends Model
{
    protected $table = 'umkm_categories';

    protected $fillable = [
        'nama',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $category->slug = Str::slug($category->nama);
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->nama);
        });
    }

    public function umkms()
    {
        return $this->hasMany(Umkm::class, 'category_id');
    }
}
