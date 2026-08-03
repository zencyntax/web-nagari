@extends('layouts.frontend')

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
            <span class="hero-badge">PEMERINTAHAN NAGARI</span>

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
            <span class="section-subtitle">Organisasi</span>

            <h2 class="section-title">
                Struktur Pemerintahan
            </h2>

            <p>
                Susunan organisasi Pemerintah Nagari Sinyamu dalam
                menjalankan pemerintahan dan pelayanan kepada masyarakat.
            </p>
        </div>

        {{-- Struktur Organisasi --}}
        <div class="organization-chart">

            <div class="org-level">
                <div class="org-card leader">
                    <img
                        src="{{ $leader['photo'] }}"
                        alt="{{ $leader['name'] }}"
                        loading="lazy"
                    >
                    <h4>{{ $leader['name'] }}</h4>
                    <span>{{ $leader['position'] }}</span>
                </div>
            </div>

            <div class="org-line vertical"></div>

            <div class="org-level">
                <div class="org-card">
                    <img
                        src="{{ $secretary['photo'] }}"
                        alt="{{ $secretary['name'] }}"
                        loading="lazy"
                    >
                    <h4>{{ $secretary['name'] }}</h4>
                    <span>{{ $secretary['position'] }}</span>
                </div>
            </div>

            <div class="org-line vertical"></div>

            <div class="org-grid">
                @foreach(array_slice($staff,0,3) as $item)
                    <div class="org-card">
                        <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}" loading="lazy">
                        <h4>{{ $item['name'] }}</h4>
                        <span>{{ $item['position'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="org-grid mt-4">
                @foreach(array_slice($staff,3,3) as $item)
                    <div class="org-card">
                        <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}" loading="lazy">
                        <h4>{{ $item['name'] }}</h4>
                        <span>{{ $item['position'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="org-grid mt-4">
                @foreach(array_slice($staff,6,3) as $item)
                    <div class="org-card">
                        <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}" loading="lazy">
                        <h4>{{ $item['name'] }}</h4>
                        <span>{{ $item['position'] }}</span>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<section class="government-section bg-light">
    <div class="container">

        <div class="section-header">
            <span class="section-subtitle">Aparatur</span>
            <h2 class="section-title">Perangkat Nagari</h2>
            <p>
                Perangkat Nagari membantu Wali Nagari dalam menjalankan roda
                pemerintahan serta memberikan pelayanan kepada masyarakat.
            </p>
        </div>

        <div class="row g-4">
            @foreach($staff as $item)
                <div class="col-lg-4 col-md-6">
                    <div class="staff-card h-100">
                        <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}" loading="lazy">
                        <h4>{{ $item['name'] }}</h4>
                        <span>{{ $item['position'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section class="government-section">
    <div class="container">

        <div class="section-header">
            <span class="section-subtitle">Lembaga</span>
            <h2 class="section-title">Lembaga Kemasyarakatan Nagari</h2>
            <p>
                Berbagai lembaga kemasyarakatan berperan sebagai mitra Pemerintah
                Nagari dalam mendukung pembangunan, pemberdayaan masyarakat,
                serta menjaga kehidupan sosial di Nagari Sinyamu.
            </p>
        </div>

        <div class="row g-4">
            @foreach($institutions as $item)
                <div class="col-lg-3 col-md-6">
                    <div class="institution-card">
                        <i class="bi {{ $item['icon'] }}" aria-hidden="true"></i>
                        <h4>{{ $item['title'] }}</h4>
                        <p>{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section class="government-section bg-light">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Pelayanan</span>
            <h2 class="section-title">Jam Pelayanan</h2>
            <p>
                Pemerintah Nagari Sinyamu berkomitmen memberikan pelayanan yang
                cepat, ramah, dan profesional kepada seluruh masyarakat.
            </p>
        </div>

        <div class="service-hours">
            <div class="service-item"><span>Senin</span><strong>08.00 - 16.00 WIB</strong></div>
            <div class="service-item"><span>Selasa</span><strong>08.00 - 16.00 WIB</strong></div>
            <div class="service-item"><span>Rabu</span><strong>08.00 - 16.00 WIB</strong></div>
            <div class="service-item"><span>Kamis</span><strong>08.00 - 16.00 WIB</strong></div>
            <div class="service-item"><span>Jumat</span><strong>08.00 - 11.30 WIB</strong></div>
            <div class="service-item"><span>Sabtu & Minggu</span><strong>Tutup</strong></div>
        </div>
    </div>
</section>

<section class="government-cta">
    <div class="container">
        <div class="cta-box text-center">
            <h2>Membutuhkan Informasi atau Layanan?</h2>

            <p>
                Pemerintah Nagari Sinyamu siap memberikan pelayanan terbaik kepada
                masyarakat. Jangan ragu untuk menghubungi kami apabila membutuhkan
                informasi maupun bantuan administrasi.
            </p>

            <a href="{{ route('contact') }}" class="btn btn-success btn-lg">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

@endsection
