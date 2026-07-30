<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PerangkatRequest extends FormRequest
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
     */
    public function rules(): array
    {
        $fotoRule = $this->isMethod('POST')
            ? 'nullable|image|mimes:jpg,jpeg,png|max:2048'
            : 'nullable|image|mimes:jpg,jpeg,png|max:2048';

        return [
            'jabatan_id' => 'required|exists:jabatans,id',
            'nama'       => 'required|string|max:255',
            'foto'       => $fotoRule,
            'status'     => 'required|boolean',
            'urutan'     => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'jabatan_id.required' => 'Jabatan wajib dipilih.',
            'jabatan_id.exists'   => 'Jabatan tidak ditemukan.',

            'nama.required'       => 'Nama perangkat wajib diisi.',
            'nama.max'            => 'Nama maksimal 255 karakter.',

            'foto.image'          => 'File harus berupa gambar.',
            'foto.mimes'          => 'Format gambar harus JPG, JPEG, atau PNG.',
            'foto.max'            => 'Ukuran gambar maksimal 2 MB.',

            'status.required'     => 'Status wajib dipilih.',

            'urutan.required'     => 'Urutan wajib diisi.',
            'urutan.integer'      => 'Urutan harus berupa angka.',
            'urutan.min'          => 'Urutan minimal 0.',
        ];
    }
}
