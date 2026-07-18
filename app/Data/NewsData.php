<?php

namespace App\Data;

class NewsData
{
    public static function all()
    {
        return [

            [
                'id' => 1,
                'slug' => 'musyawarah-perencanaan-pembangunan',
                'category' => 'Pembangunan',
                'title' => 'Musyawarah Perencanaan Pembangunan Nagari Tahun 2026',
                'date' => '15 Juli 2026',
                'author' => 'Admin Nagari',
                'image' => 'news-placeholder.jpg',
                'excerpt' => 'Pemerintah Nagari Sinyamu mengadakan Musyawarah Perencanaan Pembangunan sebagai langkah penyusunan program prioritas pembangunan.'
            ],

            // dst...

        ];
    }
}
