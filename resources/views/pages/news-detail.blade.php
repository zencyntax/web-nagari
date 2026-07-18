@extends('layouts.app')

@push('styles')
    @vite('resources/css/news-detail.css')
@endpush

@section('title','Detail Berita')

@section('content')

{{-- =======================================
    HERO
======================================= --}}

<section class="news-detail-hero">

    <div class="container">

        <nav class="breadcrumb-nav">

            <a href="{{ route('home') }}">
                Beranda
            </a>

            <span>/</span>

            <a href="{{ route('news') }}">
                Berita
            </a>

            <span>/</span>

            <span>
                Detail Berita
            </span>

        </nav>

        <div class="hero-content">

            <span class="news-category">

                Pemerintahan

            </span>

            <h1>

                Pelaksanaan Gotong Royong
                Bersama Masyarakat
                Nagari Sinyamu

            </h1>

            <div class="news-meta">

                <span>

                    <i class="bi bi-calendar-event"></i>

                    17 Juli 2026

                </span>

                <span>

                    <i class="bi bi-person-circle"></i>

                    Admin Nagari

                </span>

                <span>

                    <i class="bi bi-eye"></i>

                    250 Dibaca

                </span>

            </div>

        </div>

    </div>

</section>

{{-- =======================================
    COVER
======================================= --}}

<section class="news-cover">

    <div class="container">

        <img
            src="{{ asset('assets/images/news-featured.jpg') }}"
            class="img-fluid rounded-4 shadow"
            alt="">

    </div>

</section>

{{-- =======================================
    CONTENT
======================================= --}}

<section class="news-content">

    <div class="container">

        <div class="row g-5">

            {{-- Artikel --}}
            <div class="col-lg-8">

                <div class="article-content">

                    ...
                    isi artikel tetap
                    ...

                </div>

            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">

                <aside class="news-sidebar">

                    ...
                    widget-widget
                    ...

                </aside>

            </div>

        </div>

    </div>

</section>

{{-- =======================================
    GALERI
======================================= --}}

<section class="news-gallery">

    <div class="container">

        <div class="section-header">

            <span class="section-subtitle">
                Dokumentasi
            </span>

            <h2 class="section-title">
                Galeri Kegiatan
            </h2>

        </div>

        <div class="row g-4">

            @for($i = 1; $i <= 4; $i++)

                <div class="col-lg-3 col-md-6">

                    <div class="gallery-card">

                        <img
                            src="{{ asset('assets/images/news-placeholder.jpg') }}"
                            class="img-fluid"
                            alt="">

                    </div>

                </div>

            @endfor

        </div>

    </div>

</section>

{{-- =======================================
    SHARE
======================================= --}}

<section class="news-share">

    <div class="container">

        <div class="share-box">

            <span>Bagikan Berita</span>

            <div class="share-icons">

                <a href="#"><i class="bi bi-facebook"></i></a>

                <a href="#"><i class="bi bi-instagram"></i></a>

                <a href="#"><i class="bi bi-twitter-x"></i></a>

                <a href="#"><i class="bi bi-whatsapp"></i></a>

            </div>

        </div>

    </div>

</section>

{{-- =======================================
    BERITA TERKAIT
======================================= --}}

<section class="related-news">

    <div class="container">

        <div class="section-header">

            <span class="section-subtitle">

                Berita Lainnya

            </span>

            <h2 class="section-title">

                Berita Terkait

            </h2>

        </div>

        <div class="row g-4">

            @for($i = 1; $i <= 3; $i++)

                <div class="col-lg-4">

                    <div class="news-card">

                        <img
                            src="{{ asset('assets/images/news-placeholder.jpg') }}"
                            alt="">

                        <div class="news-body">

                            <span class="news-date">

                                17 Juli 2026

                            </span>

                            <h4>

                                Judul Berita Terkait

                            </h4>

                            <p>

                                Ringkasan singkat berita terkait
                                yang akan ditampilkan kepada
                                pengunjung.

                            </p>

                            <a href="{{ route('news.detail','berita-'.$i) }}">

                                Baca Selengkapnya

                            </a>

                        </div>

                    </div>

                </div>

            @endfor

        </div>

    </div>

</section>

{{-- =======================================
    CTA
======================================= --}}

<section class="news-cta">

    <div class="container">

        <div class="cta-box text-center">

            <h2>

                Jangan Lewatkan Informasi Terbaru

            </h2>

            <p>

                Ikuti berbagai informasi,
                kegiatan,
                pengumuman,
                dan perkembangan terbaru
                dari Pemerintah Nagari Sinyamu.

            </p>

            <a
                href="{{ route('news') }}"
                class="btn btn-success btn-lg">

                Lihat Semua Berita

            </a>

        </div>

    </div>

</section>

@endsection
