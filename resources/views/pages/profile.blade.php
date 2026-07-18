@push('styles')
    @vite('resources/css/profile.css')
@endpush

@push('scripts')
    @vite('resources/js/profile.js')
@endpush

@extends('layouts.app')

@section('title', 'Profil Nagari')

@section('content')

{{-- ===========================================
    HERO
=========================================== --}}

<section class="profile-hero">

    <div class="container">

        <div class="row justify-content-center text-center">

            <div class="col-lg-8">

                <span class="hero-badge">

                    PROFIL NAGARI

                </span>

                <h1 class="display-3 fw-bold mt-4">

                    Nagari Sinyamu

                </h1>

                <p class="lead mt-3">

                    Mengenal sejarah, visi, misi, kondisi geografis,
                    demografi serta struktur pemerintahan
                    Nagari Sinyamu.

                </p>

            </div>

        </div>

    </div>

</section>

{{-- ===========================================
    SAMBUTAN WALI NAGARI
=========================================== --}}

<section id="hero" class="about-nagari">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-5">

                <div class="leader-photo">

                    <img
                        src="{{ asset('assets/images/wali.jpg') }}"
                        alt="Wali Nagari">

                </div>

            </div>

            <div class="col-lg-7">

                <span class="section-label">

                    Sambutan

                </span>

                <h2 class="section-title">

                    Sambutan Wali Nagari

                </h2>

                <h4 class="fw-bold">

                    Nama Wali Nagari

                </h4>

                <p class="text-success fw-semibold">

                    Wali Nagari Sinyamu

                </p>

                <p class="mt-4">

                    Assalamu'alaikum Warahmatullahi Wabarakatuh.

                </p>

                <p>

                    Selamat datang di Website Resmi Nagari Sinyamu.

                    Website ini merupakan sarana informasi,
                    komunikasi, dan pelayanan kepada masyarakat
                    yang bertujuan meningkatkan transparansi,
                    pelayanan publik, serta memperkenalkan
                    potensi Nagari Sinyamu kepada masyarakat luas.

                </p>

                <p>

                    Kami berharap website ini mampu menjadi media
                    yang bermanfaat bagi masyarakat dalam memperoleh
                    informasi mengenai pemerintahan nagari,
                    kegiatan, UMKM, maupun pelayanan administrasi.

                </p>

                <a href="#sejarah"

                    class="btn btn-success btn-lg mt-3">

                    Pelajari Lebih Lanjut

                </a>

            </div>

        </div>

    </div>

</section>

{{-- ===========================================
    SEJARAH
=========================================== --}}

<section id="sejarah">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">

                Sejarah

            </span>

            <h2 class="section-title">

                Perjalanan Nagari Sinyamu

            </h2>

            <p class="text-muted">

                Perkembangan Nagari Sinyamu dari masa ke masa.

            </p>

        </div>

        <div class="timeline">

            {{-- ITEM 1 --}}

            <div class="timeline-item">

                <div class="timeline-dot">

                    <i class="bi bi-geo-alt-fill"></i>

                </div>

                <div class="timeline-content">

                    <span class="timeline-year">

                        1950

                    </span>

                    <h4>

                        Awal Berdirinya Nagari

                    </h4>

                    <p>

                        Tuliskan sejarah awal berdirinya
                        Nagari Sinyamu di sini.
                        Ceritakan asal-usul nama nagari,
                        tokoh pendiri, maupun perkembangan awal.

                    </p>

                </div>

            </div>

            {{-- ITEM 2 --}}

            <div class="timeline-item">

                <div class="timeline-dot">

                    <i class="bi bi-building"></i>

                </div>

                <div class="timeline-content">

                    <span class="timeline-year">

                        1975

                    </span>

                    <h4>

                        Pembangunan Infrastruktur

                    </h4>

                    <p>

                        Mulai dilakukan pembangunan
                        jalan, fasilitas umum,
                        kantor pemerintahan,
                        dan pelayanan masyarakat.

                    </p>

                </div>

            </div>

            {{-- ITEM 3 --}}

            <div class="timeline-item">

                <div class="timeline-dot">

                    <i class="bi bi-shop"></i>

                </div>

                <div class="timeline-content">

                    <span class="timeline-year">

                        2005

                    </span>

                    <h4>

                        Pengembangan UMKM

                    </h4>

                    <p>

                        Pemerintah Nagari mulai
                        mengembangkan sektor UMKM
                        sebagai salah satu
                        penopang ekonomi masyarakat.

                    </p>

                </div>

            </div>

            {{-- ITEM 4 --}}

            <div class="timeline-item">

                <div class="timeline-dot">

                    <i class="bi bi-globe2"></i>

                </div>

                <div class="timeline-content">

                    <span class="timeline-year">

                        2026

                    </span>

                    <h4>

                        Transformasi Digital

                    </h4>

                    <p>

                        Diluncurkannya Website Resmi
                        Nagari Sinyamu sebagai media
                        pelayanan informasi digital
                        kepada masyarakat.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- ===========================================
    VISI & MISI
=========================================== --}}

<section id="visi-misi" class="vision-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">

                Visi & Misi

            </span>

            <h2 class="section-title">

                Arah Pembangunan Nagari

            </h2>

            <p class="text-muted">

                Visi dan misi sebagai pedoman dalam pembangunan
                Nagari Sinyamu menuju masyarakat yang maju,
                mandiri, dan sejahtera.

            </p>

        </div>

        <div class="row g-4">

            {{-- VISI --}}

            <div class="col-lg-6">

                <div class="profile-card h-100">

                    <div class="icon-box">

                        <i class="bi bi-eye-fill"></i>

                    </div>

                    <h3>

                        Visi

                    </h3>

                    <p>

                        Terwujudnya Nagari Sinyamu yang
                        maju, mandiri, religius,
                        transparan, berbudaya,
                        serta memiliki daya saing
                        melalui pelayanan publik yang
                        berkualitas.

                    </p>

                </div>

            </div>

            {{-- MISI --}}

            <div class="col-lg-6">

                <div class="profile-card h-100">

                    <div class="icon-box">

                        <i class="bi bi-bullseye"></i>

                    </div>

                    <h3>

                        Misi

                    </h3>

                    <ul class="mission-list">

                        <li>

                            <i class="bi bi-check-circle-fill"></i>

                            Meningkatkan kualitas pelayanan kepada masyarakat.

                        </li>

                        <li>

                            <i class="bi bi-check-circle-fill"></i>

                            Mengembangkan sektor UMKM dan ekonomi masyarakat.

                        </li>

                        <li>

                            <i class="bi bi-check-circle-fill"></i>

                            Mendorong pembangunan infrastruktur yang merata.

                        </li>

                        <li>

                            <i class="bi bi-check-circle-fill"></i>

                            Meningkatkan kualitas pendidikan,
                            kesehatan, dan kesejahteraan masyarakat.

                        </li>

                        <li>

                            <i class="bi bi-check-circle-fill"></i>

                            Melestarikan adat, budaya,
                            dan nilai-nilai kearifan lokal.

                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- ===========================================
    DEMOGRAFI
=========================================== --}}

<section id="demografi" class="demography-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">

                Demografi

            </span>

            <h2 class="section-title">

                Gambaran Umum Nagari

            </h2>

            <p class="text-muted">

                Data umum mengenai kondisi
                masyarakat Nagari Sinyamu.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <i class="bi bi-people-fill"></i>

                    <h2 class="counter"
                        data-target="2458">

                        0

                    </h2>

                    <p>

                        Jumlah Penduduk

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <i class="bi bi-house-door-fill"></i>

                    <h2 class="counter"
                        data-target="624">

                        0

                    </h2>

                    <p>

                        Kepala Keluarga

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <i class="bi bi-pin-map-fill"></i>

                    <h2 class="counter"
                        data-target="4">

                        0

                    </h2>

                    <p>

                        Jumlah Jorong

                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-card">

                    <i class="bi bi-globe-asia-australia"></i>

                    <h2>

                        35 km²

                    </h2>

                    <p>

                        Luas Wilayah

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- ===========================================
    GEOGRAFIS
=========================================== --}}

<section id="geografis" class="geography-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">

                Geografis

            </span>

            <h2 class="section-title">

                Letak Wilayah Nagari

            </h2>

            <p class="text-muted">

                Informasi mengenai letak geografis
                Nagari Sinyamu.

            </p>

        </div>

        <div class="row g-5 align-items-center">

            <div class="col-lg-7">

                <div class="map-card">

                    <div class="ratio ratio-16x9">

                        <iframe
                            src="https://www.google.com/maps/embed?pb="
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">

                        </iframe>

                    </div>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="profile-card">

                    <h3 class="mb-4">

                        Informasi Wilayah

                    </h3>

                    <div class="geo-item">

                        <strong>Provinsi</strong>

                        <span>Sumatera Barat</span>

                    </div>

                    <div class="geo-item">

                        <strong>Kabupaten</strong>

                        <span>Sijunjung

                    </div>

                    <div class="geo-item">

                        <strong>Kecamatan</strong>

                        <span>Tanjung Gadang</span>

                    </div>

                    <div class="geo-item">

                        <strong>Luas Wilayah</strong>

                        <span>35 Km²</span>

                    </div>

                    <div class="geo-item">

                        <strong>Jumlah Jorong</strong>

                        <span>3 Jorong</span>

                    </div>

                    <div class="geo-item">

                        <strong>Ketinggian</strong>

                        <span>± 500 mdpl</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- ===========================================
    CALL TO ACTION
=========================================== --}}

<section class="profile-cta">

    <div class="container">

        <div class="cta-box text-center">

            <h2>

                Mari Bersama Membangun
                Nagari Sinyamu

            </h2>

            <p>

                Pemerintah Nagari Sinyamu
                berkomitmen memberikan pelayanan
                terbaik kepada seluruh masyarakat.

            </p>

            <div class="mt-4">

                <a href="{{ url('/kontak') }}"
                    class="btn btn-success btn-lg px-5">

                    Hubungi Kami

                </a>

            </div>

        </div>

    </div>

</section>

@endsection
