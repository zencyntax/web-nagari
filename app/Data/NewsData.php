<?php

namespace App\Data;

use App\Traits\FormatsDate;

class NewsData
{
    use FormatsDate;

    public static function hero(): array
    {
        return [
            'badge' => 'Berita Nagari',
            'title' => 'Berita dan Informasi Nagari Sinyamu',
            'subtitle' => 'Ikuti perkembangan terbaru mengenai kegiatan, pembangunan, dan informasi penting di Nagari Sinyamu.',
        ];
    }

    public static function featured(): array
    {
        return array_merge(

            [

                'slug' => 'musyawarah-perencanaan-pembangunan',

                'category' => 'Pembangunan',

                'title' => 'Musyawarah Perencanaan Pembangunan Nagari Tahun 2026',

                'author' => 'Admin Nagari',

                'image' => 'images/news/news-1.jpg',

                'excerpt' => 'Pemerintah Nagari Sinyamu mengadakan Musyawarah Perencanaan Pembangunan sebagai langkah penyusunan program prioritas pembangunan.',

                'button' => 'Baca Selengkapnya',

            ],

            self::formatDate('2026-07-15')

        );
    }

    public static function news(): array
    {
        return [

            self::newsItem(
                'musyawarah-perencanaan-pembangunan',
                'Pembangunan',
                'Musyawarah Perencanaan Pembangunan Nagari Tahun 2026',
                '2026-07-15',
                'Admin Nagari',
                'images/news/news-1.jpg',
                'Pemerintah Nagari Sinyamu mengadakan Musyawarah Perencanaan Pembangunan sebagai langkah penyusunan program prioritas pembangunan.'
            ),

            // Tambahkan berita lain di sini...
        ];
    }

    public static function details(): array
    {
        return [

            'musyawarah-perencanaan-pembangunan' => self::detail(
                'Pembangunan',
                'Musyawarah Perencanaan Pembangunan Nagari Tahun 2026',
                '2026-07-15',
                'Admin Nagari',
                'images/news/news-1.jpg',
                'Isi lengkap berita...',
                [
                    'images/news/gallery-1.jpg',
                    'images/news/gallery-2.jpg',
                ]
            ),

        ];
    }

    private static function newsItem(
        string $slug,
        string $category,
        string $title,
        string $date,
        string $author,
        string $image,
        string $excerpt
    ): array {

        return array_merge(

            [

                'slug' => $slug,

                'category' => $category,

                'title' => $title,

                'author' => $author,

                'image' => $image,

                'excerpt' => $excerpt,

                'button' => 'Baca Selengkapnya',

            ],

            self::formatDate($date)

        );
    }

    private static function detail(
        string $category,
        string $title,
        string $date,
        string $author,
        string $image,
        string $content,
        array $gallery
    ): array {

        return array_merge(

            [

                'category' => $category,

                'title' => $title,

                'author' => $author,

                'image' => $image,

                'content' => $content,

                'gallery' => $gallery,

            ],

            self::formatDate($date)

        );
    }
}
