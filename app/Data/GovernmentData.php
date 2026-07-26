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
        return self::official(
            'Amris Saputra',
            'Wali Nagari'
        );
    }

    /**
     * Data Sekretaris Nagari.
     */
    public static function secretary(): array
    {
        return self::official(
            'Harry Wineidi Putama',
            'Sekretaris Nagari'
        );
    }

    /**
     * Data Perangkat Nagari.
     */
    public static function staff(): array
    {
        return [

            self::staffMember(
                1,
                'Desi Purnama Sari',
                'Kaur Umum'
            ),

            self::staffMember(
                2,
                'Yelli Yanti',
                'Kaur Keuangan'
            ),

            self::staffMember(
                3,
                'Nama Kaur Perencanaan',
                'Kaur Perencanaan'
            ),

            self::staffMember(
                4,
                'Vina Refolinda',
                'Kasi Pemerintahan'
            ),

            self::staffMember(
                5,
                'Arlis Yul Yentri',
                'Kasi Pelayanan'
            ),

            self::staffMember(
                6,
                'Dhea Rahma Fitri',
                'Kasi Kesejahteraan'
            ),

            self::staffMember(
                7,
                'Syaparudin',
                'KA. Jorong Koto Sinyamu'
            ),

            self::staffMember(
                8,
                'Musdaril',
                'KA. Jorong Polak Sinyamu'
            ),

            self::staffMember(
                9,
                'Dai Astuti Darma',
                'KA. Jorong Kumbayak'
            ),

        ];
    }

    /**
     * Data Lembaga Kemasyarakatan.
     */
    public static function institutions(): array
    {
        return [

            self::institution(
                'bi-people-fill',
                'BAMUS',
                'Badan Musyawarah Nagari yang berperan sebagai mitra Pemerintah Nagari dalam menyusun kebijakan.'
            ),

            self::institution(
                'bi-house-heart-fill',
                'PKK',
                'Pemberdayaan dan Kesejahteraan Keluarga yang mendukung peningkatan kesejahteraan masyarakat.'
            ),

            self::institution(
                'bi-building',
                'LPM',
                'Lembaga Pemberdayaan Masyarakat yang membantu pelaksanaan pembangunan nagari.'
            ),

            self::institution(
                'bi-stars',
                'Karang Taruna',
                'Organisasi kepemudaan yang berperan dalam kegiatan sosial, budaya, dan pembangunan masyarakat.'
            ),

        ];
    }

    /**
     * Helper data pejabat.
     */
    private static function official(
        string $name,
        string $position
    ): array {

        return [

            'name' => $name,

            'position' => $position,

            'photo' => self::avatar(),

        ];
    }

    /**
     * Helper data perangkat.
     */
    private static function staffMember(
        int $id,
        string $name,
        string $position
    ): array {

        return [

            'id' => $id,

            'name' => $name,

            'position' => $position,

            'photo' => self::avatar(),

        ];
    }

    /**
     * Helper data lembaga.
     */
    private static function institution(
        string $icon,
        string $title,
        string $desc
    ): array {

        return [

            'icon' => $icon,

            'title' => $title,

            'desc' => $desc,

        ];
    }
}
