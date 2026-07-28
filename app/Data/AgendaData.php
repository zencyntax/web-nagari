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
                [
                    'Musyawarah Nagari merupakan forum bersama antara Pemerintah Nagari dan masyarakat untuk membahas berbagai program pembangunan yang akan dilaksanakan di Nagari Sinyamu.',
                    'Kegiatan ini dihadiri oleh perangkat nagari, Bamus, tokoh masyarakat, tokoh pemuda, serta berbagai unsur masyarakat sebagai bentuk partisipasi dalam pembangunan.',
                    'Melalui musyawarah ini diharapkan setiap usulan masyarakat dapat menjadi dasar penyusunan program kerja yang tepat sasaran serta meningkatkan kesejahteraan masyarakat.'
                ],
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
                [
                    'Pelatihan UMKM bertujuan meningkatkan kemampuan pelaku usaha dalam mengembangkan produk lokal yang memiliki daya saing.',
                    'Peserta memperoleh materi mengenai digital marketing, branding produk, pengemasan, hingga strategi pemasaran melalui media sosial dan marketplace.',
                    'Melalui kegiatan ini diharapkan para pelaku UMKM mampu meningkatkan kualitas usaha sekaligus memperluas jangkauan pemasaran produknya.'
                ],
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
                [
                    'Kegiatan Posyandu Balita merupakan pelayanan kesehatan rutin yang bertujuan memantau tumbuh kembang anak.',
                    'Pelayanan meliputi penimbangan berat badan, imunisasi, pemberian vitamin, serta penyuluhan mengenai gizi dan kesehatan.',
                    'Melalui kegiatan ini diharapkan kesehatan ibu dan anak di Nagari Sinyamu dapat terus terjaga dengan baik.'
                ],
                [
                    'images/agenda/gallery1.jpg',
                    'images/agenda/gallery2.jpg',
                ]
            ),

            'gotong-royong' => self::detail(
                'Gotong Royong Nagari',
                '2026-08-15',
                '07.30 WIB',
                'Jorong Sinyamu',
                'images/agenda/gotong-royong.jpg',
                [
                    'Gotong royong dilaksanakan sebagai bentuk kepedulian masyarakat terhadap kebersihan lingkungan serta memperkuat semangat kebersamaan.',
                    'Kegiatan meliputi pembersihan jalan, drainase, fasilitas umum, dan lingkungan sekitar nagari.',
                    'Pemerintah Nagari mengajak seluruh masyarakat untuk terus menjaga budaya gotong royong sebagai identitas Nagari Sinyamu.'
                ],
                [
                    'images/agenda/gallery1.jpg',
                    'images/agenda/gallery2.jpg',
                ]
            ),

            'sosialisasi-adminduk' => self::detail(
                'Sosialisasi Administrasi Kependudukan',
                '2026-08-20',
                '10.00 WIB',
                'Aula Kantor Nagari',
                'images/agenda/adminduk.jpg',
                [
                    'Sosialisasi administrasi kependudukan bertujuan meningkatkan pemahaman masyarakat mengenai pentingnya dokumen kependudukan.',
                    'Materi meliputi pembuatan KTP, Kartu Keluarga, Akta Kelahiran, serta berbagai layanan administrasi kependudukan lainnya.',
                    'Melalui kegiatan ini diharapkan masyarakat semakin mudah mengakses layanan administrasi secara cepat dan tepat.'
                ],
                [
                    'images/agenda/gallery1.jpg',
                    'images/agenda/gallery2.jpg',
                ]
            ),

            'karang-taruna' => self::detail(
                'Pembinaan Karang Taruna',
                '2026-08-24',
                '13.30 WIB',
                'Balai Pemuda',
                'images/agenda/karang-taruna.jpg',
                [
                    'Pembinaan Karang Taruna bertujuan meningkatkan kapasitas generasi muda dalam berorganisasi dan berpartisipasi aktif dalam pembangunan nagari.',
                    'Peserta memperoleh pembekalan mengenai kepemimpinan, kewirausahaan, dan pengembangan kegiatan sosial kemasyarakatan.',
                    'Melalui kegiatan ini diharapkan lahir generasi muda yang kreatif, inovatif, serta peduli terhadap kemajuan Nagari Sinyamu.'
                ],
                [
                    'images/agenda/gallery1.jpg',
                    'images/agenda/gallery2.jpg',
                ]
            ),

            'rapat-perangkat' => self::detail(
                'Rapat Koordinasi Perangkat Nagari',
                '2026-08-30',
                '09.00 WIB',
                'Ruang Rapat Nagari',
                'images/agenda/rapat.jpg',
                [
                    'Rapat koordinasi dilaksanakan sebagai sarana evaluasi pelaksanaan program kerja sekaligus menyusun langkah strategis untuk periode berikutnya.',
                    'Seluruh perangkat nagari hadir untuk menyampaikan laporan perkembangan kegiatan pada masing-masing bidang.',
                    'Melalui koordinasi yang baik diharapkan pelayanan kepada masyarakat dapat terus meningkat secara efektif dan efisien.'
                ],
                [
                    'images/agenda/gallery1.jpg',
                    'images/agenda/gallery2.jpg',
                ]
            ),

        ];
    }

    /**
     * Helper membuat data agenda.
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
     * Helper membuat detail agenda.
     */
    private static function detail(
        string $title,
        string $date,
        string $time,
        string $location,
        string $image,
        array $description,
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
