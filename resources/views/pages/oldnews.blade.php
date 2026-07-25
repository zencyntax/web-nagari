@extends('layouts.app')

@section('title', 'Berita')

@push('styles')
    @vite('resources/css/news.css')
@endpush

@push('scripts')
    @vite('resources/js/news.js')
@endpush

@section('content')

{{-- ===========================================================
    HERO SECTION
=========================================================== --}}

<section class="news-hero">

    <div class="container">

        <div class="news-hero__content">

            <span class="news-hero__subtitle">
                INFORMASI NAGARI
            </span>

            <h1 class="news-hero__title">
                Berita & Informasi
                Nagari Sinyamu
            </h1>

            <p class="news-hero__description">

                Temukan berbagai informasi terbaru mengenai kegiatan,
                pembangunan, pelayanan masyarakat, pengumuman resmi,
                serta perkembangan Nagari Sinyamu.

            </p>

        </div>

    </div>

</section>

{{-- ===========================================================
    FEATURED NEWS
=========================================================== --}}

<section class="featured-news">

    <div class="container">

        <div class="section-heading">

            <span class="section-heading__subtitle">
                BERITA UNGGULAN
            </span>

            <h2 class="section-heading__title">
                Sorotan Utama Hari Ini
            </h2>

        </div>

        <article class="featured-news__card">

            <div class="row align-items-center g-5">

                {{-- IMAGE --}}

                <div class="col-lg-6">

                    <a
                        href="{{ route('news.detail','gotong-royong-nagari') }}"
                        class="featured-news__image">

                        <img
                            src="{{ asset('assets/images/news-featured.jpg') }}"
                            alt="Gotong Royong Nagari">

                    </a>

                </div>

                {{-- CONTENT --}}

                <div class="col-lg-6">

                    <div class="featured-news__content">

                        <span class="featured-news__category">

                            Pemerintahan

                        </span>

                        <h2 class="featured-news__title">

                            Gotong Royong Bersama
                            Masyarakat Dalam Rangka
                            Menjaga Kebersihan
                            Lingkungan Nagari

                        </h2>

                        <div class="featured-news__meta">

                            <span>

                                <i class="bi bi-calendar-event"></i>

                                17 Juli 2026

                            </span>

                            <span>

                                <i class="bi bi-person-circle"></i>

                                Admin Nagari

                            </span>

                        </div>

                        <p class="featured-news__description">

                            Pemerintah Nagari Sinyamu bersama seluruh
                            masyarakat melaksanakan kegiatan gotong
                            royong sebagai bentuk kepedulian terhadap
                            kebersihan lingkungan serta mempererat
                            kebersamaan antar warga.

                        </p>

                        <a
                            href="{{ route('news.detail','gotong-royong-nagari') }}"
                            class="featured-news__button">

                            Baca Selengkapnya

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            </div>

        </article>

    </div>

</section>

<section class="latest-news">

    <div class="container">

        <div class="section-heading">

            <span class="section-heading__subtitle">
                BERITA TERBARU
            </span>

            <h2 class="section-heading__title">
                Informasi Terbaru Nagari
            </h2>

            <p class="section-heading__description">
                Ikuti berbagai kegiatan, pembangunan,
                pelayanan masyarakat, serta pengumuman
                resmi Pemerintah Nagari Sinyamu.
            </p>

        </div>


        <div class="latest-news__wrapper">

            @foreach ($news as $item)

                <article class="news-card">

                    <div class="row align-items-center">

                        {{-- Thumbnail --}}

                        <div class="col-lg-4">

                            <a
                                href="{{ route('news.detail', $item['slug']) }}"
                                class="news-card__image">

                                <img
                                    src="{{ asset('assets/images/' . $item['image']) }}"
                                    alt="{{ $item['title'] }}">

                            </a>

                        </div>

                        {{-- Content --}}

                        <div class="col-lg-8">

                            <div class="news-card__content">

                                <span class="news-card__category">

                                    {{ $item['category'] }}

                                </span>

                                <h3 class="news-card__title">

                                    <a href="{{ route('news.detail', $item['slug']) }}">

                                        {{ $item['title'] }}

                                    </a>

                                </h3>

                                <div class="news-card__meta">

                                    <span>

                                        <i class="bi bi-calendar-event"></i>

                                        {{ $item['date'] }}

                                    </span>

                                    <span>

                                        <i class="bi bi-person-circle"></i>

                                        {{ $item['author'] }}

                                    </span>

                                </div>

                                <p class="news-card__excerpt">

                                    {{ $item['excerpt'] }}

                                </p>

                                <a
                                    href="{{ route('news.detail', $item['slug']) }}"
                                    class="news-card__button">

                                    Baca Selengkapnya

                                    <i class="bi bi-arrow-right"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>

{{-- ===========================================================
    PAGINATION
=========================================================== --}}

<section class="news-pagination">

    <div class="container">

        <nav aria-label="Navigasi Halaman Berita">

            <ul class="pagination-list">

                <li>

                    <a href="#" class="pagination-button">

                        <i class="bi bi-chevron-left"></i>

                    </a>

                </li>

                <li>

                    <a href="#" class="pagination-number active">

                        1

                    </a>

                </li>

                <li>

                    <a href="#" class="pagination-number">

                        2

                    </a>

                </li>

                <li>

                    <a href="#" class="pagination-number">

                        3

                    </a>

                </li>

                <li>

                    <span class="pagination-dots">

                        ...

                    </span>

                </li>

                <li>

                    <a href="#" class="pagination-number">

                        10

                    </a>

                </li>

                <li>

                    <a href="#" class="pagination-button">

                        <i class="bi bi-chevron-right"></i>

                    </a>

                </li>

            </ul>

        </nav>

    </div>

</section>

{{-- ===========================================================
    CTA
=========================================================== --}}

<section class="news-cta">

    <div class="container">

        <div class="news-cta__wrapper">

            <span class="news-cta__subtitle">

                TETAP TERHUBUNG

            </span>

            <h2 class="news-cta__title">

                Jangan Lewatkan Informasi
                Terbaru Dari Nagari Sinyamu

            </h2>

            <p class="news-cta__description">

                Pemerintah Nagari Sinyamu terus berkomitmen
                menyampaikan informasi secara cepat,
                transparan, dan terpercaya kepada seluruh
                masyarakat.

            </p>

            <div class="news-cta__buttons">

                <a
                    href="{{ route('contact') }}"
                    class="btn-primary-custom">

                    Hubungi Kami

                </a>

                <a
                    href="{{ route('home') }}"
                    class="btn-secondary-custom">

                    Kembali ke Beranda

                </a>

            </div>

        </div>

    </div>

</section>

@endsection
