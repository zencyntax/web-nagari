<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UmkmRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $umkm = $this->route('umkm');

        $logoRule = 'nullable|image|mimes:jpg,jpeg,png|max:2048';
        $fotoRule = 'nullable|image|mimes:jpg,jpeg,png|max:4096';

        return [

            'umkm_category_id' => [
                'required',
                'exists:umkm_categories,id'
            ],

            'nama' => [
                'required',
                'string',
                'max:255'
            ],

            'slug' => [
                'nullable',
                Rule::unique('umkms', 'slug')->ignore($umkm),
            ],

            'pemilik' => [
                'required',
                'string',
                'max:255'
            ],

            'logo' => $logoRule,

            'foto' => $fotoRule,

            'deskripsi' => [
                'nullable',
                'string'
            ],

            'alamat' => [
                'nullable',
                'string',
                'max:255'
            ],

            'telepon' => [
                'nullable',
                'string',
                'max:30'
            ],

            'email' => [
                'nullable',
                'email',
                'max:255'
            ],

            'website' => [
                'nullable',
                'url',
                'max:255'
            ],

            'facebook' => [
                'nullable',
                'max:255'
            ],

            'instagram' => [
                'nullable',
                'max:255'
            ],

            'tiktok' => [
                'nullable',
                'max:255'
            ],

            'status' => [
                'required',
                'boolean'
            ],

        ];
    }
}
