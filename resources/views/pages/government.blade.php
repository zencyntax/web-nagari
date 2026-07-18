@extends('layouts.app')

@push('styles')
    @vite('resources/css/government.css')
@endpush

@push('scripts')
    @vite('resources/js/government.js')
@endpush

@section('title', 'Pemerintahan')

@section('content')

{{-- =========================
        HERO
========================= --}}

<section class="government-hero">

    <div class="container">

        <div class="hero-content text-center">

            <span class="hero-badge">
                PEMERINTAHAN NAGARI
            </span>

            <h1>
                Pemerintahan
                <br>
                Nagari Sinyamu
            </h1>

            <p>
                Mengenal struktur organisasi, perangkat nagari,
                lembaga kemasyarakatan, serta pelayanan publik
                di Nagari Sinyamu.
            </p>

        </div>

    </div>

</section>

{{-- =========================
    STRUKTUR PEMERINTAHAN
========================= --}}

<section class="government-section">

    <div class="container">

        <div class="section-header">

            <span class="section-subtitle">
                Organisasi
            </span>

            <h2 class="section-title">
                Struktur Pemerintahan
            </h2>

            <p>
                Susunan organisasi Pemerintah Nagari Sinyamu dalam
                menjalankan pemerintahan dan pelayanan kepada masyarakat.
            </p>

        </div>

        <div class="organization-chart">

            {{-- Wali Nagari --}}
            <div class="org-level">

                <div class="org-card leader">

                    <img src="{{ asset('assets/images/avatar.png') }}" alt="">

                    <h4>Nama Wali Nagari</h4>

                    <span>Wali Nagari</span>

                </div>

            </div>

            <div class="org-line vertical"></div>

            {{-- Sekretaris --}}
            <div class="org-level">

                <div class="org-card">

                    <img src="{{ asset('assets/images/avatar.png') }}" alt="">

                    <h4>Nama Sekretaris</h4>

                    <span>Sekretaris Nagari</span>

                </div>

            </div>

            <div class="org-line vertical"></div>

            {{-- Kaur & Kasi --}}
            <div class="org-grid">

                <div class="org-card">
                    <img src="{{ asset('assets/images/avatar.png') }}">
                    <h4>Nama</h4>
                    <span>Kaur Umum</span>
                </div>

                <div class="org-card">
                    <img src="{{ asset('assets/images/avatar.png') }}">
                    <h4>Nama</h4>
                    <span>Kaur Keuangan</span>
                </div>

                <div class="org-card">
                    <img src="{{ asset('assets/images/avatar.png') }}">
                    <h4>Nama</h4>
                    <span>Kasi Pemerintahan</span>
                </div>

            </div>

            <div class="org-grid mt-4">

                <div class="org-card">
                    <img src="{{ asset('assets/images/avatar.png') }}">
                    <h4>Nama</h4>
                    <span>Kasi Pelayanan</span>
                </div>

                <div class="org-card">
                    <img src="{{ asset('assets/images/avatar.png') }}">
                    <h4>Nama</h4>
                    <span>Kasi Kesejahteraan</span>
                </div>

                <div class="org-card">
                    <img src="{{ asset('assets/images/avatar.png') }}">
                    <h4>Nama</h4>
                    <span>Kepala Jorong</span>
                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================
    PERANGKAT NAGARI
========================= --}}

<section class="government-section bg-light">

    <div class="container">

        <div class="section-header">

            <span class="section-subtitle">
                Aparatur
            </span>

            <h2 class="section-title">
                Perangkat Nagari
            </h2>

            <p>
                Perangkat Nagari membantu Wali Nagari dalam
                menjalankan roda pemerintahan serta memberikan
                pelayanan kepada masyarakat.
            </p>

        </div>

        <div class="row g-4">

@php
$staff = [
    [
        'name' => 'Nama Perangkat',
        'position' => 'Sekretaris Nagari',
        'photo' => asset('assets/images/avatar.png'),
    ],
    [
        'name' => 'Nama Perangkat',
        'position' => 'Kaur Keuangan',
        'photo' => asset('assets/images/avatar.png'),
    ],
    [
        'name' => 'Nama Perangkat',
        'position' => 'Kaur Umum',
        'photo' => asset('assets/images/avatar.png'),
    ],
    [
        'name' => 'Nama Perangkat',
        'position' => 'Kasi Pemerintahan',
        'photo' => asset('assets/images/avatar.png'),
    ],
    [
        'name' => 'Nama Perangkat',
        'position' => 'Kasi Pelayanan',
        'photo' => asset('assets/images/avatar.png'),
    ],
    [
        'name' => 'Nama Perangkat',
        'position' => 'Kepala Jorong',
        'photo' => asset('assets/images/avatar.png'),
    ],
];
@endphp

            @foreach($staff as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="staff-card">
                        <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}">

                        <h4>{{ $item['name'] }}</h4>

                        <span>{{ $item['position'] }}</span>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- =========================
    LEMBAGA NAGARI
========================= --}}

<section class="government-section">

    <div class="container">

        <div class="section-header">

            <span class="section-subtitle">
                Lembaga
            </span>

            <h2 class="section-title">
                Lembaga Kemasyarakatan Nagari
            </h2>

            <p>
                Berbagai lembaga kemasyarakatan berperan sebagai mitra Pemerintah
                Nagari dalam mendukung pembangunan, pemberdayaan masyarakat,
                serta menjaga kehidupan sosial di Nagari Sinyamu.
            </p>

        </div>

        <div class="row g-4">

            @php
                $institutions = [
                    [
                        'icon' => 'bi-people-fill',
                        'title' => 'BAMUS',
                        'desc' => 'Badan Musyawarah Nagari yang berperan sebagai mitra Pemerintah Nagari dalam menyusun kebijakan.'
                    ],
                    [
                        'icon' => 'bi-house-heart-fill',
                        'title' => 'PKK',
                        'desc' => 'Pemberdayaan dan Kesejahteraan Keluarga yang mendukung peningkatan kesejahteraan masyarakat.'
                    ],
                    [
                        'icon' => 'bi-building',
                        'title' => 'LPM',
                        'desc' => 'Lembaga Pemberdayaan Masyarakat yang membantu pelaksanaan pembangunan nagari.'
                    ],
                    [
                        'icon' => 'bi-stars',
                        'title' => 'Karang Taruna',
                        'desc' => 'Organisasi kepemudaan yang berperan dalam kegiatan sosial, budaya, dan pembangunan masyarakat.'
                    ],
                ];
            @endphp

            @foreach($institutions as $item)

                <div class="col-lg-3 col-md-6">

                    <div class="institution-card">

                        <i class="bi {{ $item['icon'] }}"></i>

                        <h4>{{ $item['title'] }}</h4>

                        <p>{{ $item['desc'] }}</p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- =========================
    JAM PELAYANAN
========================= --}}

<section class="government-section bg-light">

    <div class="container">

        <div class="section-header">

            <span class="section-subtitle">
                Pelayanan
            </span>

            <h2 class="section-title">
                Jam Pelayanan
            </h2>

            <p>
                Pemerintah Nagari Sinyamu berkomitmen memberikan pelayanan yang
                cepat, ramah, dan profesional kepada seluruh masyarakat.
            </p>

        </div>

        <div class="service-hours">

            <div class="service-item">
                <span>Senin</span>
                <strong>08.00 - 16.00 WIB</strong>
            </div>

            <div class="service-item">
                <span>Selasa</span>
                <strong>08.00 - 16.00 WIB</strong>
            </div>

            <div class="service-item">
                <span>Rabu</span>
                <strong>08.00 - 16.00 WIB</strong>
            </div>

            <div class="service-item">
                <span>Kamis</span>
                <strong>08.00 - 16.00 WIB</strong>
            </div>

            <div class="service-item">
                <span>Jumat</span>
                <strong>08.00 - 11.30 WIB</strong>
            </div>

            <div class="service-item">
                <span>Sabtu & Minggu</span>
                <strong>Tutup</strong>
            </div>

        </div>

    </div>

</section>

{{-- =========================
    CTA
========================= --}}

<section class="government-cta">

    <div class="container">

        <div class="cta-box text-center">

            <h2>
                Membutuhkan Informasi atau Layanan?
            </h2>

            <p>
                Pemerintah Nagari Sinyamu siap memberikan pelayanan terbaik kepada
                masyarakat. Jangan ragu untuk menghubungi kami apabila membutuhkan
                informasi maupun bantuan administrasi.
            </p>

            <a href="#" class="btn btn-success btn-lg">
                Hubungi Kami
            </a>

        </div>

    </div>

</section>

@endsection
