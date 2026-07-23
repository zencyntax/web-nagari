<?php

namespace App\Data;

class ProfileData
{
    public static function hero(): array
    {
        return [
            'badge' => 'PROFIL NAGARI',

            'title' => 'Profil Nagari Sinyamu',

            'subtitle' =>
                'Mengenal lebih dekat Nagari Sinyamu, sejarah, visi misi, kondisi geografis, serta potensi yang dimiliki sebagai nagari yang terus berkembang.',
        ];
    }

    public static function welcome(): array
    {
        return [

            'name' => 'Nama Wali Nagari',

            'position' => 'Wali Nagari Sinyamu',

            'photo' => asset('assets/images/profile/wali-nagari.jpg'),

            'greeting' =>
                "Assalamu'alaikum Warahmatullahi Wabarakatuh.",

            'paragraphs' => [

                'Selamat datang di Website Resmi Nagari Sinyamu. Website ini hadir sebagai media informasi dan komunikasi antara Pemerintah Nagari dengan masyarakat maupun pihak luar yang ingin mengenal Nagari Sinyamu.',

                'Kami berkomitmen memberikan pelayanan yang transparan, akuntabel, serta mendukung pemanfaatan teknologi informasi dalam penyelenggaraan pemerintahan nagari demi meningkatkan kualitas pelayanan kepada masyarakat.',

            ],

        ];
    }

    public static function history(): array
    {
        return [

            'date' => '12 Februari 2012',

            'title' => 'Nagari Sinyamu Resmi Berdiri',

            'description' =>
                'Nagari Sinyamu resmi dimekarkan dari Nagari Timbulun pada tanggal 12 Februari 2012 sebagai bagian dari upaya meningkatkan efektivitas pelayanan pemerintahan serta mempercepat pembangunan bagi masyarakat.',

        ];
    }

    public static function vision(): string
    {
        return 'Terwujudnya Nagari Sinyamu yang Maju, Mandiri, Sejahtera, Religius dan Berbudaya.';
    }

    public static function missions(): array
    {
        return [

            'Meningkatkan kualitas pelayanan kepada masyarakat.',

            'Mewujudkan tata kelola pemerintahan yang transparan dan akuntabel.',

            'Meningkatkan kualitas sumber daya manusia.',

            'Mengembangkan potensi ekonomi masyarakat berbasis UMKM.',

            'Meningkatkan pembangunan infrastruktur nagari.',

            'Melestarikan adat istiadat dan budaya lokal.',

            'Mendorong partisipasi masyarakat dalam pembangunan.',

            'Meningkatkan kualitas lingkungan hidup yang berkelanjutan.',

        ];
    }

    public static function demography(): array
    {
        return [

            [

                'icon' => 'bi-people-fill',

                'value' => 1201,

                'label' => 'Jumlah Penduduk',

                'counter' => true,

            ],

            [

                'icon' => 'bi-house-door-fill',

                'value' => 295,

                'label' => 'Kepala Keluarga',

                'counter' => true,

            ],

            [

                'icon' => 'bi-pin-map-fill',

                'value' => 3,

                'label' => 'Jumlah Jorong',

                'counter' => true,

            ],

            [

                'icon' => 'bi-globe-asia-australia',

                'value' => '12,1 km²',

                'label' => 'Luas Wilayah',

                'counter' => false,

            ],

        ];
    }

    public static function geography(): array
    {
        return [

            'map' => 'https://www.google.com/maps/embed?pb=!1m18',

            'items' => [

                [

                    'label' => 'Provinsi',

                    'value' => 'Sumatera Barat',

                ],

                [

                    'label' => 'Kabupaten',

                    'value' => 'Sijunjung',

                ],

                [

                    'label' => 'Kecamatan',

                    'value' => 'Tanjung Gadang',

                ],

                [

                    'label' => 'Luas Wilayah',

                    'value' => '12,1 km²',

                ],

                [

                    'label' => 'Jumlah Jorong',

                    'value' => '3 Jorong',

                ],

                [

                    'label' => 'Ketinggian',

                    'value' => '±500 mdpl',

                ],

            ],

        ];
    }

    public static function cta(): array
    {
        return [

            'title' => 'Mari Bersama Membangun Nagari',

            'description' =>
                'Partisipasi masyarakat merupakan kunci utama dalam mewujudkan Nagari Sinyamu yang lebih maju, mandiri, dan sejahtera.',

            'button' => 'Hubungi Kami',

        ];
    }
}
