<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [

        // Sambutan
        'foto_wali',
        'nama_wali',
        'jabatan_wali',
        'sambutan',

        // Sejarah
        'tanggal_berdiri',
        'sejarah',

        // Visi
        'visi',

        // Gambaran Umum
        'gambaran_umum',

        'jumlah_penduduk',
        'jumlah_laki_laki',
        'jumlah_perempuan',
        'jumlah_kk',
        'kk_laki_laki',
        'kk_perempuan',
        'jumlah_jorong',
        'luas_wilayah',

        // Letak Wilayah
        'provinsi',
        'kabupaten',
        'kecamatan',
        'ketinggian',
        'kode_pos',
        'peta',

    ];

    public function missions()
    {
        return $this->hasMany(ProfileMission::class)
                    ->orderBy('urutan');
    }

    public function jorongs()
{
    return $this->hasMany(ProfileJorong::class)
                ->orderBy('urutan');
}
}
