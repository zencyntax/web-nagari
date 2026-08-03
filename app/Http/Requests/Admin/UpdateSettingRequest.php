<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | Informasi Website
            |--------------------------------------------------------------------------
            */

            'nama_website' => [
                'required',
                'string',
                'max:255',
            ],

            'nama_nagari' => [
                'required',
                'string',
                'max:255',
            ],

            'slogan' => [
                'nullable',
                'string',
                'max:255',
            ],

            /*
            |--------------------------------------------------------------------------
            | Branding
            |--------------------------------------------------------------------------
            */

            'logo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp,svg',
                'max:4096',
            ],

            'favicon' => [
                'nullable',
                'image',
                'mimes:png,ico',
                'max:2048',
            ],

            'hero' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],

            /*
            |--------------------------------------------------------------------------
            | Kontak
            |--------------------------------------------------------------------------
            */

            'email' => [
                'nullable',
                'email',
            ],

            'telepon' => [
                'nullable',
                'string',
                'max:30',
            ],

            'alamat' => [
                'nullable',
                'string',
            ],

            /*
            |--------------------------------------------------------------------------
            | Sosial Media
            |--------------------------------------------------------------------------
            */

            'facebook' => [
                'nullable',
                'url',
            ],

            'instagram' => [
                'nullable',
                'url',
            ],

            'youtube' => [
                'nullable',
                'url',
            ],

            'tiktok' => [
                'nullable',
                'url',
            ],

            /*
            |--------------------------------------------------------------------------
            | SEO
            |--------------------------------------------------------------------------
            */

            'meta_description' => [
                'nullable',
                'string',
                'max:255',
            ],

            'meta_keyword' => [
                'nullable',
                'string',
                'max:255',
            ],

            'og_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],

            /*
            |--------------------------------------------------------------------------
            | Footer
            |--------------------------------------------------------------------------
            */

            'copyright' => [
                'nullable',
                'string',
                'max:255',
            ],

        ];
    }
}
