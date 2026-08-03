<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LembagaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $logoRule = 'nullable|image|mimes:jpg,jpeg,png|max:2048';

        return [
            'nama'       => 'required|string|max:255',
            'ketua'      => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
            'logo'       => $logoRule,
            'status'     => 'required|boolean',
            'urutan'     => 'required|integer|min:0',
        ];
    }
}
