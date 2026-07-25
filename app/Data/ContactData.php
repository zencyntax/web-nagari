<?php

namespace App\Data;

class ContactData
{
    public static function hero()
    {
        return [
            'badge' => 'Hubungi Kami',
            'title' => 'Kami Siap Mendengarkan dan Membantu Anda',
            'subtitle' => 'Pemerintah Nagari Sinyamu siap menerima pertanyaan, saran, maupun masukan dari masyarakat. Silakan hubungi perangkat nagari melalui kontak yang tersedia atau kirimkan pesan melalui formulir di bawah.',
        ];
    }

    public static function contactPersons()
    {
        return [
            [
                'name' => 'Amris Saputra',
                'position' => 'Wali Nagari',
                'photo' => 'images/profile/wali.jpg',
                'phone' => '08xxxxxxxxxx',
                'email' => 'nagarisinyamu21@gmail.com',
                'whatsapp' => '628xxxxxxxxxx',
            ],
            [
                'name' => 'Harry Wineidi Putama',
                'position' => 'Sekretaris Nagari',
                'photo' => 'images/profile/sekretaris.jpg',
                'phone' => '08xxxxxxxxxx',
                'email' => 'nagarisinyamu21@gmail.com',
                'whatsapp' => '628xxxxxxxxxx',
            ],
        ];
    }

    public static function form()
    {
        return [
            'title' => 'Kirim Pesan',
            'subtitle' => 'Silakan isi formulir berikut. Kami akan berusaha memberikan tanggapan secepat mungkin.',
            'button' => 'Kirim Pesan',
        ];
    }

    public static function faq()
    {
        return [
            [
                'question' => 'Bagaimana cara mengurus surat di kantor nagari?',
                'answer' => 'Silakan datang langsung ke Kantor Wali Nagari pada jam pelayanan dengan membawa persyaratan sesuai jenis surat yang akan diurus.',
            ],
            [
                'question' => 'Bagaimana cara menghubungi Wali Nagari?',
                'answer' => 'Masyarakat dapat menghubungi Wali Nagari melalui nomor WhatsApp yang tersedia pada halaman ini.',
            ],
            [
                'question' => 'Bagaimana cara menyampaikan kritik atau saran?',
                'answer' => 'Kritik dan saran dapat disampaikan melalui formulir kontak atau langsung kepada perangkat nagari melalui kontak yang tersedia.',
            ],
            [
                'question' => 'Di mana saya bisa melihat informasi terbaru Nagari Sinyamu?',
                'answer' => 'Informasi terbaru dapat dilihat pada halaman Berita di website resmi Nagari Sinyamu.',
            ],
        ];
    }

    public static function cta()
    {
        return [
            'title' => 'Masih Membutuhkan Bantuan?',
            'description' => 'Kami siap memberikan pelayanan dan informasi kepada seluruh masyarakat Nagari Sinyamu.',
            'button' => 'Kembali ke Beranda',
        ];
    }
}
