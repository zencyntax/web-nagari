<?php

namespace App\Data;

class UmkmData
{
    public static function hero(): array
    {
        return [
            'badge' => 'UMKM Nagari',
            'title' => 'Dukung Produk Lokal Nagari Sinyamu',
            'subtitle' => 'Temukan berbagai usaha mikro, kecil, dan menengah yang menjadi bagian dari potensi ekonomi Nagari Sinyamu. Mari bersama mendukung produk lokal untuk meningkatkan kesejahteraan masyarakat.',
        ];
    }

    public static function about(): array
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

    public static function umkms(): array
    {
        return [

            self::umkm(
                'Nama UMKM',
                'nama-umkm',
                'Makanan',
                'Nama Pemilik',
                'Jorong Contoh',
                'images/umkm/umkm-1.jpg'
            ),

            self::umkm(
                'Nama UMKM',
                'nama-umkm-2',
                'Kerajinan',
                'Nama Pemilik',
                'Jorong Contoh',
                'images/umkm/umkm-2.jpg'
            ),

        ];
    }

    public static function details(): array
    {
        return [

            'nama-umkm' => self::detail(
                'Nama UMKM',
                'Makanan',
                'Nama Pemilik',
                'Jorong Contoh',
                'Deskripsi lengkap mengenai UMKM. Jelaskan sejarah singkat usaha, produk yang dihasilkan, serta peran UMKM tersebut dalam mendukung perekonomian masyarakat Nagari Sinyamu.',
                'images/umkm/umkm-1.jpg',
                [
                    'images/umkm/gallery-1.jpg',
                    'images/umkm/gallery-2.jpg',
                    'images/umkm/gallery-3.jpg',
                ]
            ),

            'nama-umkm-2' => self::detail(
                'Nama UMKM',
                'Kerajinan',
                'Nama Pemilik',
                'Jorong Contoh',
                'Deskripsi lengkap mengenai UMKM.',
                'images/umkm/umkm-2.jpg',
                [
                    'images/umkm/gallery-4.jpg',
                    'images/umkm/gallery-5.jpg',
                ]
            ),

        ];
    }

    public static function join(): array
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

    public static function cta(): array
    {
        return [

            'title' => 'Mari Dukung Produk Lokal',

            'description' => 'Dengan membeli produk lokal, Anda turut membantu meningkatkan perekonomian masyarakat Nagari Sinyamu.',

            'button' => 'Kembali ke Beranda',

        ];
    }

    /**
     * Helper untuk membuat data UMKM.
     */
    private static function umkm(
        string $name,
        string $slug,
        string $category,
        string $owner,
        string $location,
        string $image
    ): array {

        return [

            'name' => $name,

            'slug' => $slug,

            'category' => $category,

            'owner' => $owner,

            'location' => $location,

            'image' => $image,

            'button' => 'Lihat Detail',

        ];
    }

    /**
     * Helper untuk membuat detail UMKM.
     */
    private static function detail(
        string $name,
        string $category,
        string $owner,
        string $location,
        string $description,
        string $image,
        array $gallery
    ): array {

        return [

            'name' => $name,

            'category' => $category,

            'owner' => $owner,

            'location' => $location,

            'description' => $description,

            'image' => $image,

            'gallery' => $gallery,

        ];
    }
}
