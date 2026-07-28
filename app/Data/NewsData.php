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

            self::newsItem(
                'pelatihan-umkm-digital',
                'UMKM',
                'Pelatihan Digital Marketing Untuk Pelaku UMKM',
                '2026-07-12',
                'Admin Nagari',
                'images/news/news-2.jpg',
                'Pelatihan digital marketing diberikan kepada pelaku UMKM agar mampu memasarkan produk secara lebih luas melalui media digital.'
            ),

            self::newsItem(
                'gotong-royong-lingkungan',
                'Lingkungan',
                'Gotong Royong Bersama Menjaga Kebersihan Lingkungan',
                '2026-07-08',
                'Admin Nagari',
                'images/news/news-3.jpg',
                'Masyarakat bersama pemerintah nagari melaksanakan kegiatan gotong royong untuk menjaga kebersihan lingkungan.'
            ),

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

                [

                    'Pemerintah Nagari Sinyamu menyelenggarakan Musyawarah Perencanaan Pembangunan (Musrenbang) Nagari Tahun 2026 sebagai bagian dari proses penyusunan program pembangunan yang akan dilaksanakan pada tahun berikutnya.',

                    'Kegiatan ini dihadiri oleh perangkat nagari, Badan Musyawarah (Bamus), tokoh masyarakat, tokoh pemuda, unsur perempuan, serta perwakilan berbagai lembaga kemasyarakatan yang ada di Nagari Sinyamu.',

                    'Dalam musyawarah tersebut, masyarakat diberikan kesempatan untuk menyampaikan berbagai usulan pembangunan, mulai dari infrastruktur, pemberdayaan masyarakat, peningkatan pelayanan publik, hingga pengembangan potensi ekonomi nagari.',

                    'Seluruh usulan yang masuk akan menjadi bahan pertimbangan dalam penyusunan Rencana Kerja Pemerintah Nagari (RKP Nagari) sehingga program yang dilaksanakan benar-benar sesuai dengan kebutuhan masyarakat.',

                    'Pemerintah Nagari berharap melalui kegiatan Musrenbang ini tercipta pembangunan yang lebih partisipatif, transparan, serta mampu meningkatkan kesejahteraan masyarakat Nagari Sinyamu secara berkelanjutan.',

                ],

                [

                    'images/news/gallery-1.jpg',
                    'images/news/gallery-2.jpg',
                    'images/news/gallery-3.jpg',

                ]

            ),

            'pelatihan-umkm-digital' => self::detail(

                'UMKM',

                'Pelatihan Digital Marketing Untuk Pelaku UMKM',

                '2026-07-12',

                'Admin Nagari',

                'images/news/news-2.jpg',

                [

                    'Pemerintah Nagari Sinyamu menyelenggarakan pelatihan digital marketing bagi pelaku UMKM sebagai upaya meningkatkan daya saing produk lokal.',

                    'Peserta mendapatkan materi mengenai pemasaran melalui media sosial, marketplace, hingga strategi branding produk agar mampu menjangkau pasar yang lebih luas.',

                    'Melalui kegiatan ini diharapkan pelaku UMKM mampu meningkatkan penjualan sekaligus memperkuat perekonomian masyarakat nagari.',

                ],

                [

                    'images/news/gallery-4.jpg',
                    'images/news/gallery-5.jpg',

                ]

            ),

            'gotong-royong-lingkungan' => self::detail(

                'Lingkungan',

                'Gotong Royong Bersama Menjaga Kebersihan Lingkungan',

                '2026-07-08',

                'Admin Nagari',

                'images/news/news-3.jpg',

                [

                    'Pemerintah Nagari bersama masyarakat melaksanakan kegiatan gotong royong sebagai bentuk kepedulian terhadap kebersihan lingkungan.',

                    'Kegiatan meliputi pembersihan jalan, drainase, fasilitas umum, serta penanaman pohon di beberapa titik nagari.',

                    'Semangat kebersamaan yang terbangun diharapkan mampu terus dipertahankan sehingga tercipta lingkungan yang bersih, sehat, dan nyaman bagi seluruh masyarakat.',

                ],

                [

                    'images/news/gallery-6.jpg',
                    'images/news/gallery-7.jpg',

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
        array $content,
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
