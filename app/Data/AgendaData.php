<?php

namespace App\Data;

use App\Traits\FormatsDate;

class AgendaData
{
    use FormatsDate;

    public static function hero(): array
    {
        return [
            'badge' => 'Agenda Nagari',
            'title' => 'Agenda Kegiatan Nagari Sinyamu',
            'subtitle' => 'Informasi mengenai kegiatan, rapat, pelatihan, dan berbagai agenda Pemerintah Nagari Sinyamu.',
        ];
    }

    public static function featured(): array
    {
        return array_merge(

            [

                'title' => 'Musyawarah Nagari',

                'slug' => 'musyawarah-nagari',

                'time' => '09.00 WIB',

                'location' => 'Kantor Wali Nagari',

                'image' => 'images/agenda/musyawarah.jpg',

                'button' => 'Lihat Detail',

            ],

            self::formatDate('2026-07-25')

        );
    }

    public static function agendas(): array
    {
        return [

            self::agenda(
                'Pelatihan UMKM',
                'pelatihan-umkm',
                '2026-08-05',
                '08.30 WIB',
                'Balai Nagari',
                'images/agenda/umkm.jpg'
            ),

            self::agenda(
                'Posyandu Balita',
                'posyandu-balita',
                '2026-08-10',
                '09.00 WIB',
                'Poskesri Nagari',
                'images/agenda/posyandu.jpg'
            ),

            self::agenda(
                'Gotong Royong Nagari',
                'gotong-royong',
                '2026-08-15',
                '07.30 WIB',
                'Jorong Sinyamu',
                'images/agenda/gotong-royong.jpg'
            ),

            self::agenda(
                'Sosialisasi Administrasi Kependudukan',
                'sosialisasi-adminduk',
                '2026-08-20',
                '10.00 WIB',
                'Aula Kantor Nagari',
                'images/agenda/adminduk.jpg'
            ),

            self::agenda(
                'Pembinaan Karang Taruna',
                'karang-taruna',
                '2026-08-24',
                '13.30 WIB',
                'Balai Pemuda',
                'images/agenda/karang-taruna.jpg'
            ),

            self::agenda(
                'Rapat Koordinasi Perangkat Nagari',
                'rapat-perangkat',
                '2026-08-30',
                '09.00 WIB',
                'Ruang Rapat Nagari',
                'images/agenda/rapat.jpg'
            ),

        ];
    }

    public static function details(): array
    {
        return [

            'musyawarah-nagari' => self::detail(
                'Musyawarah Nagari',
                '2026-07-25',
                '09.00 WIB',
                'Kantor Wali Nagari',
                'images/agenda/musyawarah.jpg',
                'Musyawarah Nagari merupakan forum bersama pemerintah nagari dan masyarakat untuk membahas berbagai program pembangunan serta menyerap aspirasi masyarakat demi kemajuan Nagari Sinyamu.',
                [
                    'images/agenda/gallery1.jpg',
                    'images/agenda/gallery2.jpg',
                    'images/agenda/gallery3.jpg',
                ]
            ),

            'pelatihan-umkm' => self::detail(
                'Pelatihan UMKM',
                '2026-08-05',
                '08.30 WIB',
                'Balai Nagari',
                'images/agenda/umkm.jpg',
                'Pelatihan bagi pelaku UMKM untuk meningkatkan kualitas produk, pemasaran digital, dan pengelolaan usaha.',
                [
                    'images/agenda/gallery1.jpg',
                    'images/agenda/gallery2.jpg',
                ]
            ),

            'posyandu-balita' => self::detail(
                'Posyandu Balita',
                '2026-08-10',
                '09.00 WIB',
                'Poskesri Nagari',
                'images/agenda/posyandu.jpg',
                'Pelayanan kesehatan rutin bagi balita yang meliputi penimbangan, imunisasi, dan penyuluhan gizi.',
                [
                    'images/agenda/gallery1.jpg',
                    'images/agenda/gallery2.jpg',
                ]
            ),

        ];
    }

    /**
     * Helper untuk membuat data agenda.
     */
    private static function agenda(
        string $title,
        string $slug,
        string $date,
        string $time,
        string $location,
        string $image
    ): array {

        return array_merge(

            [

                'title' => $title,

                'slug' => $slug,

                'time' => $time,

                'location' => $location,

                'image' => $image,

                'button' => 'Lihat Detail',

            ],

            self::formatDate($date)

        );
    }

    /**
     * Helper untuk membuat detail agenda.
     */
    private static function detail(
        string $title,
        string $date,
        string $time,
        string $location,
        string $image,
        string $description,
        array $gallery
    ): array {

        return array_merge(

            [

                'title' => $title,

                'time' => $time,

                'location' => $location,

                'image' => $image,

                'description' => $description,

                'gallery' => $gallery,

            ],

            self::formatDate($date)

        );
    }
}
