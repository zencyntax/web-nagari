<?php

namespace App\Data;

class UmkmData
{
    public static function hero()
    {
        return [
            'badge' => 'UMKM Nagari',
            'title' => 'Dukung Produk Lokal Nagari Sinyamu',
            'subtitle' => 'Temukan berbagai usaha mikro, kecil, dan menengah yang menjadi bagian dari potensi ekonomi Nagari Sinyamu. Mari bersama mendukung produk lokal untuk meningkatkan kesejahteraan masyarakat.',
        ];
    }

    public static function about()
    {
        return [
            'title' => 'Tentang UMKM Nagari Sinyamu',

            'description' => [
                'UMKM merupakan salah satu penggerak perekonomian masyarakat Nagari Sinyamu. Berbagai usaha yang dikelola masyarakat menjadi sumber pendapatan sekaligus membuka lapangan pekerjaan di lingkungan sekitar.',

                'Melalui website ini, Pemerintah Nagari Sinyamu berupaya memperkenalkan produk-produk lokal agar semakin dikenal oleh masyarakat luas serta mendukung perkembangan ekonomi nagari secara berkelanjutan.',
            ],

            'image' => 'images/umkm/about.jpg',
        ];
    }

    public static function umkms()
    {
        return [

            [
                'name' => 'Nama UMKM',
                'slug' => 'nama-umkm',
                'category' => 'Makanan',
                'owner' => 'Nama Pemilik',
                'location' => 'Jorong Contoh',
                'image' => 'images/umkm/umkm-1.jpg',
                'button' => 'Lihat Detail',
            ],

            [
                'name' => 'Nama UMKM',
                'slug' => 'nama-umkm-2',
                'category' => 'Kerajinan',
                'owner' => 'Nama Pemilik',
                'location' => 'Jorong Contoh',
                'image' => 'images/umkm/umkm-2.jpg',
                'button' => 'Lihat Detail',
            ],

        ];
    }

    public static function details()
    {
        return [

            'nama-umkm' => [

                'name' => 'Nama UMKM',

                'category' => 'Makanan',

                'owner' => 'Nama Pemilik',

                'location' => 'Jorong Contoh',

                'description' => 'Deskripsi lengkap mengenai UMKM. Jelaskan sejarah singkat usaha, produk yang dihasilkan, serta peran UMKM tersebut dalam mendukung perekonomian masyarakat Nagari Sinyamu.',

                'image' => 'images/umkm/umkm-1.jpg',

                'gallery' => [

                    'images/umkm/gallery-1.jpg',
                    'images/umkm/gallery-2.jpg',
                    'images/umkm/gallery-3.jpg',

                ],

            ],

            'nama-umkm-2' => [

                'name' => 'Nama UMKM',

                'category' => 'Kerajinan',

                'owner' => 'Nama Pemilik',

                'location' => 'Jorong Contoh',

                'description' => 'Deskripsi lengkap mengenai UMKM.',

                'image' => 'images/umkm/umkm-2.jpg',

                'gallery' => [

                    'images/umkm/gallery-4.jpg',
                    'images/umkm/gallery-5.jpg',

                ],

            ],

        ];
    }

    public static function join()
    {
        return [

            'title' => 'Punya Usaha?',

            'description' => 'Mari bergabung bersama UMKM Nagari Sinyamu. Pemerintah Nagari membuka kesempatan bagi pelaku usaha lokal untuk memperkenalkan usahanya melalui website resmi nagari.',

            'benefits' => [

                'Pendataan UMKM Nagari',

                'Promosi melalui website resmi',

                'Mendukung pengembangan usaha lokal',

            ],

            'button' => 'Hubungi Kami',

        ];
    }

    public static function cta()
    {
        return [

            'title' => 'Mari Dukung Produk Lokal',

            'description' => 'Dengan membeli produk lokal, Anda turut membantu meningkatkan perekonomian masyarakat Nagari Sinyamu.',

            'button' => 'Kembali ke Beranda',

        ];
    }
}
