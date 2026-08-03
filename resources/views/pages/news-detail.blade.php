@extends('layouts.frontend')

@section('title', $news['title'])

@push('styles')
    @vite('resources/css/news-detail.css')
@endpush

@section('content')

{{-- ===========================================================
    HERO
=========================================================== --}}

<section class="news-detail-hero">

    <div class="container">

        <div class="news-detail-hero__content">

            <span class="news-detail-hero__badge">

                BERITA NAGARI

            </span>

            <h1 class="news-detail-hero__title">

                {{ $news['title'] }}

            </h1>

            <div class="news-detail-hero__meta">

                <span>

                    <i class="bi bi-calendar-event"></i>

                    {{ $news['date'] }}

                </span>

                <span>

                    <i class="bi bi-person-circle"></i>

                    {{ $news['author'] }}

                </span>

                <span>

                    <i class="bi bi-tag"></i>

                    {{ $news['category'] }}

                </span>

            </div>

        </div>

    </div>

</section>

{{-- ===========================================================
    BREADCRUMB
=========================================================== --}}

<section class="breadcrumb-section">

    <div class="container">

        <nav class="breadcrumb-custom">

            <a href="{{ route('home') }}">

                Beranda

            </a>

            <span>/</span>

            <a href="{{ route('news') }}">

                Berita

            </a>

            <span>/</span>

            <span class="active">

                {{ $news['title'] }}

            </span>

        </nav>

    </div>

</section>

{{-- ===========================================================
    ARTICLE
=========================================================== --}}

<section class="news-detail">

    <div class="container">

        <div class="news-detail__wrapper">

            {{-- Featured Image --}}

            <div class="news-detail__image">

                <img
                    src="{{ asset('assets/'.$news['image']) }}"
                    alt="{{ $news['title'] }}">

            </div>

            {{-- Content --}}

            <article class="news-detail__content">

                @if(is_array($news['content']))

                    @foreach($news['content'] as $paragraph)

                        <p>

                            {{ $paragraph }}

                        </p>

                    @endforeach

                @else

                    <p>

                        {{ $news['content'] }}

                    </p>

                @endif

            </article>

        </div>

    </div>

</section>

{{-- ===========================================================
    GALLERY
=========================================================== --}}

@if(!empty($news['gallery']))

<section class="news-gallery">

    <div class="container">

        <div class="section-heading">

            <span class="section-heading__subtitle">

                DOKUMENTASI

            </span>

            <h2 class="section-heading__title">

                Galeri Kegiatan

            </h2>

        </div>

        <div class="row g-4">

            @foreach($news['gallery'] as $image)

                <div class="col-lg-4 col-md-6">

                    <a
                        href="{{ asset('assets/'.$image) }}"
                        class="gallery-card">

                        <img
                            src="{{ asset('assets/'.$image) }}"
                            alt="Gallery">

                        <div class="gallery-card__overlay">

                            <i class="bi bi-search"></i>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endif

{{-- ===========================================================
    RELATED NEWS
=========================================================== --}}

<section class="related-news">

    <div class="container">

        <div class="section-heading">

            <span class="section-heading__subtitle">

                BERITA LAINNYA

            </span>

            <h2 class="section-heading__title">

                Berita Terkait

            </h2>

        </div>

        <div class="row g-4">

            @foreach($relatedNews as $item)

                @continue($item['title'] == $news['title'])

                <div class="col-lg-4 col-md-6">

                    <article class="related-card">

                        <a
                            href="{{ route('news.detail',$item['slug']) }}"
                            class="related-card__image">

                            <img
                                src="{{ asset('assets/'.$item['image']) }}"
                                alt="{{ $item['title'] }}">

                        </a>

                        <div class="related-card__content">

                            <span class="related-card__category">

                                {{ $item['category'] }}

                            </span>

                            <h3>

                                <a href="{{ route('news.detail',$item['slug']) }}">

                                    {{ $item['title'] }}

                                </a>

                            </h3>

                            <div class="related-card__meta">

                                <span>

                                    <i class="bi bi-calendar-event"></i>

                                    {{ $item['date'] }}

                                </span>

                            </div>

                            <a
                                href="{{ route('news.detail',$item['slug']) }}"
                                class="related-card__button">

                                Baca Selengkapnya

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        </div>

                    </article>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- ===========================================================
    CTA
=========================================================== --}}

<section class="news-detail-cta">

    <div class="container">

        <div class="news-detail-cta__wrapper">

            <span>

                INFORMASI NAGARI

            </span>

            <h2>

                Tetap Ikuti Informasi Terbaru
                Dari Pemerintah Nagari Sinyamu

            </h2>

            <p>

                Dapatkan informasi mengenai pembangunan,
                pelayanan masyarakat,
                kegiatan nagari,
                serta pengumuman resmi secara cepat
                dan terpercaya.

            </p>

            <div class="news-detail-cta__buttons">

                <a
                    href="{{ route('news') }}"
                    class="btn-primary-custom">

                    Kembali ke Berita

                </a>

                <a
                    href="{{ route('contact') }}"
                    class="btn-secondary-custom">

                    Hubungi Kami

                </a>

            </div>

        </div>

    </div>

</section>

@endsection
