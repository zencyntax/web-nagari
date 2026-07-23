<?php

namespace App\Data;

class GovernmentData
{
    /**
     * Avatar default perangkat nagari.
     */
    private static function avatar(): string
    {
        return asset('assets/images/avatar.png');
    }

    /**
     * Data Wali Nagari.
     */
    public static function leader(): array
    {
        return [
            'name' => 'Amris Saputra',
            'position' => 'Wali Nagari',
            'photo' => self::avatar(),
        ];
    }

    /**
     * Data Sekretaris Nagari.
     */
    public static function secretary(): array
    {
        return [
            'name' => 'Harry Wineidi Putama',
            'position' => 'Sekretaris Nagari',
            'photo' => self::avatar(),
        ];
    }

    /**
     * Data Perangkat Nagari.
     */
    public static function staff(): array
    {
        return [

            [
                'id' => 1,
                'name' => 'Desi Purnama Sari',
                'position' => 'Kaur Umum',
                'photo' => self::avatar(),
            ],

            [
                'id' => 2,
                'name' => 'Yelli Yanti',
                'position' => 'Kaur Keuangan',
                'photo' => self::avatar(),
            ],

            [
                'id' => 3,
                'name' => 'Nama Kaur Perencanaan',
                'position' => 'Kaur Perencanaan',
                'photo' => self::avatar(),
            ],

            [
                'id' => 4,
                'name' => 'Vina Refolinda',
                'position' => 'Kasi Pemerintahan',
                'photo' => self::avatar(),
            ],

            [
                'id' => 5,
                'name' => 'Arlis Yul Yentri',
                'position' => 'Kasi Pelayanan',
                'photo' => self::avatar(),
            ],

            [
                'id' => 6,
                'name' => 'Dhea Rahma Fitri',
                'position' => 'Kasi Kesejahteraan',
                'photo' => self::avatar(),
            ],

            [
                'id' => 7,
                'name' => 'Syaparudin',
                'position' => 'KA. Jorong Koto Sinyamu',
                'photo' => self::avatar(),
            ],

            [
                'id' => 8,
                'name' => 'Musdaril',
                'position' => 'KA. Jorong Polak Sinyamu',
                'photo' => self::avatar(),
            ],

            [
                'id' => 9,
                'name' => 'Dai Astuti Darma',
                'position' => 'KA. Jorong Kumbayak',
                'photo' => self::avatar(),
            ],

        ];
    }

    /**
     * Data Lembaga Kemasyarakatan.
     */
    public static function institutions(): array
    {
        return [

            [
                'icon' => 'bi-people-fill',
                'title' => 'BAMUS',
                'desc' => 'Badan Musyawarah Nagari yang berperan sebagai mitra Pemerintah Nagari dalam menyusun kebijakan.',
            ],

            [
                'icon' => 'bi-house-heart-fill',
                'title' => 'PKK',
                'desc' => 'Pemberdayaan dan Kesejahteraan Keluarga yang mendukung peningkatan kesejahteraan masyarakat.',
            ],

            [
                'icon' => 'bi-building',
                'title' => 'LPM',
                'desc' => 'Lembaga Pemberdayaan Masyarakat yang membantu pelaksanaan pembangunan nagari.',
            ],

            [
                'icon' => 'bi-stars',
                'title' => 'Karang Taruna',
                'desc' => 'Organisasi kepemudaan yang berperan dalam kegiatan sosial, budaya, dan pembangunan masyarakat.',
            ],

        ];
    }
}
