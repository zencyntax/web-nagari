<?php

namespace App\Data;

class ProfileData
{
    public static function hero(): array
    {
        return [

            'badge' => 'PROFIL NAGARI',

            'title' => 'Profil Nagari Sinyamu',

            'subtitle' => 'Mengenal lebih dekat Nagari Sinyamu, sejarah, visi dan misi, kondisi geografis, serta potensi yang dimiliki sebagai nagari yang terus berkembang.',

        ];
    }

    public static function welcome(): array
    {
        return [

            'name' => 'Amris Saputra',

            'position' => 'Wali Nagari Sinyamu',

            'photo' => asset('assets/images/profile/wali-nagari.jpg'),

            'greeting' => "Assalamu'alaikum Warahmatullahi Wabarakatuh.",

            'paragraphs' => [

                'Selamat datang di Website Resmi Nagari Sinyamu. Website ini hadir sebagai media informasi dan komunikasi antara Pemerintah Nagari dengan masyarakat, sekaligus sebagai sarana publikasi berbagai potensi, program, dan pelayanan yang tersedia di Nagari Sinyamu.',

                'Kami berkomitmen mewujudkan tata kelola pemerintahan yang terbuka, profesional, dan berorientasi pada pelayanan masyarakat. Semoga website ini dapat memberikan manfaat, mempererat hubungan antara pemerintah nagari dengan masyarakat, serta menjadi sumber informasi yang akurat dan terpercaya.',

            ],

        ];
    }

    public static function history(): array
    {
        return [

            'date' => '12 Februari 2012',

            'title' => 'Nagari Sinyamu Resmi Berdiri',

            'description' => 'Nagari Sinyamu resmi dimekarkan dari Nagari Timbulun pada tanggal 12 Februari 2012 sebagai bagian dari upaya meningkatkan efektivitas penyelenggaraan pemerintahan serta pemerataan pelayanan kepada masyarakat. Sejak berdiri sebagai nagari definitif, Nagari Sinyamu terus berupaya meningkatkan kualitas pembangunan di berbagai bidang, mulai dari pemerintahan, infrastruktur, pemberdayaan ekonomi masyarakat, pendidikan, hingga pelestarian adat dan budaya demi mewujudkan kesejahteraan masyarakat.',

        ];
    }

    public static function vision(): string
    {
        return 'Sesuai dengan kondisi objektif, tantangan dan harapan Nagari Sinyamu ditentukan Visi Nagari Sinyamu Kec. Tanjung Gadang Kabupaten Sijunjung:

“Mewujudkan Nagari Idaman, Pemerintahan Yang Bersih, Masyarakat Sejahtera Aman Sentosa Dalam Bingkai NKRI”

dalam artian menjadikan Nagari Sinyamu masa yang akan datang yang menitik beratkan pembangunan Nagari Sinyamu dengan sistim musyawarah dan mufakat, persaudaraan yang tinggi menuju Nagari yang aman dan damai dan masyarakatnya bertaqwa, sejahtera, madani, cinta tanah air, menjunjung tinggi supremasi hukum dan hak asasi manusia, sadar lingkungan, menguasai ilmu pengetahuan dan teknologi dalam wadah Negara Kesatuan Republik Indonesia.';
    }

    public static function missions(): array
    {
        return [

            'Meningkatkan pengamalan ajaran Agama Islam, meningkatkan ukhuwah Islamiyah, serta memberantas penyakit masyarakat (PEKAT).',

            'Mewujudkan partisipasi masyarakat dan semangat gotong royong dalam setiap pembangunan.',

            'Memberantas segala bentuk penyimpangan dan penyelewengan dalam penyelenggaraan pemerintahan nagari.',

            'Membangun infrastruktur berupa kantor pemerintahan, jalan, serta fasilitas umum yang menunjang perekonomian dan pendidikan masyarakat.',

            'Menjalin kerja sama dengan seluruh unsur organisasi yang ada di Nagari sesuai dengan tugas dan fungsinya masing-masing.',

            'Menggali serta mengembangkan seluruh potensi Nagari secara optimal dengan berbasis ekonomi masyarakat.',

            'Menegakkan hukum dan peraturan Nagari secara murni dan konsekuen.',

            'Menumbuhkembangkan empat pilar utama Nagari yaitu Ninik Mamak, Alim Ulama, Cadiak Pandai, Tokoh Masyarakat, serta menjalin sinergi dengan para perantau.',

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

                'details' => [

                    [
                        'icon' => 'bi-gender-male',
                        'label' => 'Laki-laki',
                        'value' => 777,
                    ],

                    [
                        'icon' => 'bi-gender-female',
                        'label' => 'Perempuan',
                        'value' => 424,
                    ],

                ],

            ],

            [

                'icon' => 'bi-house-door-fill',

                'value' => 295,

                'label' => 'Kepala Keluarga',

                'counter' => true,

                'details' => [

                    [
                        'icon' => 'bi-gender-male',
                        'label' => 'KK Laki-laki',
                        'value' => 268,
                    ],

                    [
                        'icon' => 'bi-gender-female',
                        'label' => 'KK Perempuan',
                        'value' => 27,
                    ],

                ],

            ],

            [

                'icon' => 'bi-pin-map-fill',

                'value' => 3,

                'label' => 'Jumlah Jorong',

                'counter' => true,

                'details' => [

                    [
                        'icon' => 'bi-pin-map-fill',
                        'label' => 'Jorong Koto Sinyamu',
                        'value' => null,
                    ],

                    [
                        'icon' => 'bi-pin-map-fill',
                        'label' => 'Jorong Polak Sinyamu',
                        'value' => null,
                    ],

                    [
                        'icon' => 'bi-pin-map-fill',
                        'label' => 'Jorong Kumbayak',
                        'value' => null,
                    ],

                ],

            ],

            [

                'icon' => 'bi-globe-asia-australia',

                'value' => '12,1 km²',

                'label' => 'Luas Wilayah',

                'counter' => false,

                'details' => [

                    [
                        'icon' => 'bi-arrow-up-right-circle-fill',
                        'label' => 'Ketinggian',
                        'value' => '±125 mdpl',
                    ],

                    [
                        'icon' => 'bi-geo-alt-fill',
                        'label' => 'Kecamatan',
                        'value' => 'Tanjung Gadang',
                    ],

                ],

            ],

        ];
    }

    public static function geography(): array
    {
        return [

            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.4475629460026!2d101.07026347473716!3d-0.7751643992173017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2b10d514236ce7%3A0x8fa9c138ada67be8!2sKantor%20Wali%20Nagari%20Sinyamu!5e1!3m2!1sid!2sid!4v1784794188687!5m2!1sid!2sid',

            'items' => [

                [
                    'label' => 'Provinsi',
                    'value' => 'Sumatera Barat',
                ],

                [
                    'label' => 'Kabupaten',
                    'value' => 'Kabupaten Sijunjung',
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
                    'value' => '±125 mdpl',
                ],

            ],

        ];
    }

    public static function cta(): array
    {
        return [

            'title' => 'Mari Bersama Membangun Nagari',

            'description' => 'Partisipasi masyarakat merupakan kunci utama dalam mewujudkan Nagari Sinyamu yang lebih maju, mandiri, dan sejahtera. Bersama kita dapat membangun nagari yang lebih baik untuk generasi sekarang maupun yang akan datang.',

            'button' => 'Hubungi Kami',

        ];
    }
}
