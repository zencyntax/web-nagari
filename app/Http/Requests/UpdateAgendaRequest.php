<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgendaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'title' => 'required|string|max:255',

            'description' => 'required|string',

            'location' => 'required|string|max:255',

            'date' => 'required|date',

            'time' => 'required',

            'status' => 'required|string|in:Draft,Publish',

            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        ];
    }

    public function attributes(): array
    {
        return [

            'title' => 'judul agenda',

            'description' => 'deskripsi agenda',

            'location' => 'lokasi',

            'date' => 'tanggal',

            'time' => 'jam',

            'status' => 'status',

            'thumbnail' => 'thumbnail',

        ];
    }

    public function messages(): array
    {
        return [

            'title.required' => 'Judul agenda wajib diisi.',

            'title.max' => 'Judul agenda maksimal 255 karakter.',

            'description.required' => 'Deskripsi agenda wajib diisi.',

            'location.required' => 'Lokasi agenda wajib diisi.',

            'date.required' => 'Tanggal agenda wajib dipilih.',

            'time.required' => 'Jam agenda wajib diisi.',

            'status.required' => 'Status agenda wajib dipilih.',

            'status.in' => 'Status agenda tidak valid.',

            'thumbnail.image' => 'Thumbnail harus berupa gambar.',

            'thumbnail.mimes' => 'Thumbnail harus berformat JPG, JPEG atau PNG.',

            'thumbnail.max' => 'Ukuran thumbnail maksimal 2 MB.',

        ];
    }
}
