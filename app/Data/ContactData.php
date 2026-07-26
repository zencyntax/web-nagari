<?php

namespace App\Data;

class ContactData
{
    public static function hero(): array
    {
        return [
            'badge' => 'Hubungi Kami',
            'title' => 'Kami Siap Mendengarkan dan Membantu Anda',
            'subtitle' => 'Pemerintah Nagari Sinyamu siap menerima pertanyaan, saran, maupun masukan dari masyarakat. Silakan hubungi perangkat nagari melalui kontak yang tersedia atau kirimkan pesan melalui formulir di bawah.',
        ];
    }

    public static function contactPersons(): array
    {
        return [

            self::contactPerson(
                'Amris Saputra',
                'Wali Nagari',
                'images/profile/wali.jpg',
                '08xxxxxxxxxx',
                'nagarisinyamu21@gmail.com',
                '628xxxxxxxxxx'
            ),

            self::contactPerson(
                'Harry Wineidi Putama',
                'Sekretaris Nagari',
                'images/profile/sekretaris.jpg',
                '08xxxxxxxxxx',
                'nagarisinyamu21@gmail.com',
                '628xxxxxxxxxx'
            ),

        ];
    }

    public static function form(): array
    {
        return [
            'title' => 'Kirim Pesan',
            'subtitle' => 'Silakan isi formulir berikut. Kami akan berusaha memberikan tanggapan secepat mungkin.',
            'button' => 'Kirim Pesan',
        ];
    }

    public static function faq(): array
    {
        return [

            self::faqItem(
                'Bagaimana cara mengurus surat di kantor nagari?',
                'Silakan datang langsung ke Kantor Wali Nagari pada jam pelayanan dengan membawa persyaratan sesuai jenis surat yang akan diurus.'
            ),

            self::faqItem(
                'Bagaimana cara menghubungi Wali Nagari?',
                'Masyarakat dapat menghubungi Wali Nagari melalui nomor WhatsApp yang tersedia pada halaman ini.'
            ),

            self::faqItem(
                'Bagaimana cara menyampaikan kritik atau saran?',
                'Kritik dan saran dapat disampaikan melalui formulir kontak atau langsung kepada perangkat nagari melalui kontak yang tersedia.'
            ),

            self::faqItem(
                'Di mana saya bisa melihat informasi terbaru Nagari Sinyamu?',
                'Informasi terbaru dapat dilihat pada halaman Berita di website resmi Nagari Sinyamu.'
            ),

        ];
    }

    public static function cta(): array
    {
        return [
            'title' => 'Masih Membutuhkan Bantuan?',
            'description' => 'Kami siap memberikan pelayanan dan informasi kepada seluruh masyarakat Nagari Sinyamu.',
            'button' => 'Kembali ke Beranda',
        ];
    }

    /**
     * Helper data contact person.
     */
    private static function contactPerson(
        string $name,
        string $position,
        string $photo,
        string $phone,
        string $email,
        string $whatsapp
    ): array {

        return [

            'name' => $name,

            'position' => $position,

            'photo' => $photo,

            'phone' => $phone,

            'email' => $email,

            'whatsapp' => $whatsapp,

        ];
    }

    /**
     * Helper data FAQ.
     */
    private static function faqItem(
        string $question,
        string $answer
    ): array {

        return [

            'question' => $question,

            'answer' => $answer,

        ];
    }
}
