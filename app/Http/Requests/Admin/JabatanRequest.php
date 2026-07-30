<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JabatanRequest extends FormRequest
{
    /**
     * Menentukan apakah user boleh melakukan request ini.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Aturan validasi form.
     */
    public function rules(): array
    {
        return [
            'nama_jabatan' => [
                'required',
                'string',
                'max:100',
                Rule::unique('jabatans', 'nama_jabatan')
                    ->ignore($this->route('jabatan')),
            ],

            'urutan' => [
                'required',
                'integer',
                'min:0',
            ],
        ];
    }

    /**
     * Mengubah nama field pada pesan error.
     */
    public function attributes(): array
    {
        return [
            'nama_jabatan' => 'nama jabatan',
            'urutan' => 'urutan',
        ];
    }
}
