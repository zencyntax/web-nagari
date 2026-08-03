<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
{
    /**
     * Tentukan apakah user boleh melakukan request ini.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Aturan validasi.
     */
    public function rules(): array
    {
        return [

            'title' => 'required|max:255',

            'content' => 'required',

            'status' => 'required|in:Draft,Publish',

            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ];
    }

    /**
     * Nama field agar pesan error lebih mudah dipahami.
     */
    public function attributes(): array
    {
        return [

            'title' => 'judul berita',

            'content' => 'isi berita',

            'thumbnail' => 'thumbnail',

            'status' => 'status',

        ];
    }

    /**
     * Custom pesan validasi.
     */
    public function messages(): array
    {
        return [

            'title.required' => 'Judul berita wajib diisi.',

            'title.max' => 'Judul berita maksimal 255 karakter.',

            'content.required' => 'Isi berita wajib diisi.',

            'status.required' => 'Status berita wajib dipilih.',

            'status.in' => 'Status berita tidak valid.',

            'thumbnail.image' => 'Thumbnail harus berupa gambar.',

            'thumbnail.mimes' => 'Thumbnail harus berformat JPG, JPEG, atau PNG.',

            'thumbnail.max' => 'Ukuran thumbnail maksimal 2 MB.',

        ];
    }
}
