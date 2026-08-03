<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUmkmGalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation Rules
     */
    public function rules(): array
    {
        return [

            'umkm_id' => [
                'required',
                'exists:umkms,id',
            ],

            'judul' => [
                'nullable',
                'string',
                'max:255',
            ],

            'urutan' => [
                'nullable',
                'integer',
                'min:1',
            ],

            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],

        ];
    }
}
