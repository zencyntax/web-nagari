@extends('layouts.app')

@push('styles')
    @vite('resources/css/home.css')
@endpush

@section('title', 'Beranda')

@section('content')

<!-- ===========================
HERO
=========================== -->

<section class="hero">

    <div class="hero-overlay"></div>

    <div class="container">

        <div class="row align-items-center vh-100">

            <div class="col-lg-7">

                <span class="hero-badge">
                    Selamat Datang di
                </span>

                <h1>

                    Nagari <br>
                    Sinyamu

                </h1>

                <p>

                    Website resmi Pemerintah Nagari Sinyamu sebagai pusat informasi,
                    pelayanan masyarakat, publikasi kegiatan, serta promosi UMKM
                    nagari.

                </p>

                <div class="hero-button">

                    <a
                        href="{{ route('profile') }}"
                        class="btn btn-success btn-lg"
                    >
                    Profil Nagari
                    </a>

                    <a href="{{ route('contact') }}"

                        class="btn btn-warning btn-lg">

                        Pengaduan

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ===========================
STATISTIK
=========================== -->

<section class="statistics">

    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <div class="stat-card">

                    <i class="bi bi-people-fill" aria-hidden="true"></i>

                    <h2>2.458</h2>

                    <p>Penduduk</p>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="stat-card">

                    <i class="bi bi-shop" aria-hidden="true"></i>

                    <h2>128</h2>

                    <p>UMKM</p>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="stat-card">

                    <i class="bi bi-newspaper" aria-hidden="true"></i>

                    <h2>56</h2>

                    <p>Berita</p>

                </div>

            </div>

            <div class="col-lg-3">

                <div class="stat-card">

                    <i class="bi bi-calendar-event" aria-hidden="true"></i>

                    <h2>24</h2>

                    <p>Agenda</p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="about-section py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5 text-center">

                <div class="leader-photo">

                    <img
                        src="{{ asset('assets/images/wali.jpg') }}"
                        alt="Wali Nagari"
                        loading="lazy"
                    >
                </div>

            </div>

            <div class="col-lg-7">

                <span class="section-label">
                    Tentang Nagari
                </span>

                <h2 class="section-title">
                    Sambutan Wali Nagari
                    <br>
                    Nagari Sinyamu
                </h2>

                <h4 class="fw-bold mt-3">
                    Fahmi surya utama
                </h4>

                <p class="text-success fw-semibold">
                    Wali Nagari
                </p>

                <p class="mt-4">

                    Selamat datang di Website Resmi Nagari Sinyamu.

                    Website ini menjadi media informasi, pelayanan,
                    transparansi pemerintahan serta promosi potensi
                    nagari kepada masyarakat.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ===========================
TENTANG
=========================== -->

<section class="about">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <img
                    src="{{ asset('assets/images/about.jpg') }}"
                    alt="Nagari Sinyamu"
                    class="img-fluid rounded-4"
                    loading="lazy"
                >

            </div>

            <div class="col-lg-6">

                <span class="section-title">

                    Tentang Nagari

                </span>

                <h2>

                    Selamat Datang di Nagari Sinyamu

                </h2>

                <p>

                    Nagari Sinyamu merupakan salah satu nagari yang memiliki
                    potensi di bidang pertanian, UMKM, dan budaya lokal.
                    Website ini dibuat sebagai media informasi dan pelayanan
                    masyarakat secara digital.

                </p>

                <a href="{{ route('profile') }}"

                    class="btn btn-success">

                    Selengkapnya

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ===========================
UMKM
=========================== -->

<section class="umkm">

    <div class="container">

        <div class="section-header">

            <span>

                UMKM

            </span>

            <h2>

                UMKM Unggulan Nagari

            </h2>

        </div>

        <div class="row">

            {{-- nanti card UMKM di sini --}}

        </div>

    </div>

</section>

<!-- ===========================
BERITA
=========================== -->

<section class="news">

    <div class="container">

        <div class="section-header">

            <span>

                Berita

            </span>

            <h2>

                Berita Terbaru

            </h2>

        </div>

        <div class="row">

            {{-- nanti card berita --}}

        </div>

    </div>

</section>

@endsection
