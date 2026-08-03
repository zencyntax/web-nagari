<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [

        /*
        |--------------------------------------------------------------------------
        | Sambutan
        |--------------------------------------------------------------------------
        */

        'foto_wali' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        'nama_wali' => 'nullable|max:255',

        'jabatan_wali' => 'nullable|max:255',

        'sambutan' => 'nullable',

        /*
        |--------------------------------------------------------------------------
        | Sejarah
        |--------------------------------------------------------------------------
        */

        'tanggal_berdiri' => 'nullable|date',

        'sejarah' => 'nullable',

        /*
        |--------------------------------------------------------------------------
        | Visi
        |--------------------------------------------------------------------------
        */

        'visi' => 'nullable',

        /*
        |--------------------------------------------------------------------------
        | Gambaran Umum
        |--------------------------------------------------------------------------
        */

        'gambaran_umum' => 'nullable',

        'jumlah_penduduk' => 'nullable|integer|min:0',

        'jumlah_laki_laki' => 'nullable|integer|min:0',

        'jumlah_perempuan' => 'nullable|integer|min:0',

        'jumlah_kk' => 'nullable|integer|min:0',
        'kk_laki_laki' => 'nullable|integer|min:0',
        'kk_perempuan' => 'nullable|integer|min:0',

        'jumlah_jorong' => 'nullable|integer|min:0',

        'luas_wilayah' => 'nullable|max:255',

        /*
        |--------------------------------------------------------------------------
        | Letak Wilayah
        |--------------------------------------------------------------------------
        */

        'provinsi' => 'nullable|max:255',

        'kabupaten' => 'nullable|max:255',

        'kecamatan' => 'nullable|max:255',

        'ketinggian' => 'nullable|max:255',

        'kode_pos' => 'nullable|max:10',

        'peta' => 'nullable|string|max:10000',

    ];
}

public function attributes(): array
{
    return [

        'sejarah' => 'sejarah',

        'visi' => 'visi',

        'misi' => 'misi',

        'gambaran_umum' => 'gambaran umum',

        'geografis' => 'geografis',

        'demografi' => 'demografi',

        'luas_wilayah' => 'luas wilayah',

        'jumlah_penduduk' => 'jumlah penduduk',

        'jumlah_laki_laki' => 'jumlah laki-laki',

        'jumlah_perempuan' => 'jumlah perempuan',

        'jumlah_kk' => 'jumlah KK',

        'kk_laki_laki' => 'KK laki-laki',

        'kk_perempuan' => 'KK perempuan',

        'jumlah_jorong' => 'jumlah jorong',

        'peta' => 'peta nagari',

    ];
}
}
