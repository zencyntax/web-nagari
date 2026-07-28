@extends('layouts.app')

@section('title', $agenda['title'])

@push('styles')
    @vite('resources/css/agenda-detail.css')
@endpush

@section('content')

{{-- ===========================================================
    HERO
=========================================================== --}}

<section class="agenda-detail-hero">

    <div class="container">

        <div class="agenda-detail-hero__content">

            <span class="agenda-detail-hero__badge">

                AGENDA NAGARI

            </span>

            <h1 class="agenda-detail-hero__title">

                {{ $agenda['title'] }}

            </h1>

            <div class="agenda-detail-hero__meta">

                <span>

                    <i class="bi bi-calendar-event"></i>

                    {{ $agenda['full_date'] }}

                </span>

                <span>

                    <i class="bi bi-clock"></i>

                    {{ $agenda['time'] }}

                </span>

                <span>

                    <i class="bi bi-geo-alt"></i>

                    {{ $agenda['location'] }}

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

            <a href="{{ route('agenda') }}">

                Agenda

            </a>

            <span>/</span>

            <span class="active">

                {{ $agenda['title'] }}

            </span>

        </nav>

    </div>

</section>

{{-- ===========================================================
    DETAIL
=========================================================== --}}

<section class="agenda-detail">

    <div class="container">

        <div class="agenda-detail__wrapper">

            <div class="agenda-detail__image">

                <img
                    src="{{ asset($agenda['image']) }}"
                    alt="{{ $agenda['title'] }}">

            </div>

            <article class="agenda-detail__content">

                <div class="agenda-info">

                    <div class="agenda-info__item">

                        <i class="bi bi-calendar-event-fill"></i>

                        <div>

                            <span>Tanggal</span>

                            <strong>{{ $agenda['full_date'] }}</strong>

                        </div>

                    </div>

                    <div class="agenda-info__item">

                        <i class="bi bi-clock-fill"></i>

                        <div>

                            <span>Waktu</span>

                            <strong>{{ $agenda['time'] }}</strong>

                        </div>

                    </div>

                    <div class="agenda-info__item">

                        <i class="bi bi-geo-alt-fill"></i>

                        <div>

                            <span>Lokasi</span>

                            <strong>{{ $agenda['location'] }}</strong>

                        </div>

                    </div>

                </div>

                @foreach($agenda['description'] as $paragraph)

                    <p>

                        {{ $paragraph }}

                    </p>

                @endforeach

            </article>

        </div>

    </div>

</section>

{{-- ===========================================================
    GALLERY
=========================================================== --}}

@if(!empty($agenda['gallery']))

<section class="agenda-gallery">

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

            @foreach($agenda['gallery'] as $image)

                <div class="col-lg-4 col-md-6">

                    <a
                        href="{{ asset($image) }}"
                        class="gallery-card">

                        <img
                            src="{{ asset($image) }}"
                            alt="{{ $agenda['title'] }}">

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
    RELATED AGENDA
=========================================================== --}}

<section class="related-agenda">

    <div class="container">

        <div class="section-heading">

            <span class="section-heading__subtitle">

                AGENDA LAINNYA

            </span>

            <h2 class="section-heading__title">

                Agenda Kegiatan Lain

            </h2>

        </div>

        <div class="row g-4">

            @foreach($relatedAgenda as $item)

                @continue($item['slug'] == $currentSlug)

                <div class="col-lg-4 col-md-6">

                    <article class="related-card">

                        <a
                            href="{{ route('agenda.show', $item['slug']) }}"
                            class="related-card__image">

                            <img
                                src="{{ asset($item['image']) }}"
                                alt="{{ $item['title'] }}">

                        </a>

                        <div class="related-card__content">

                            <span class="related-card__category">

                                Agenda Nagari

                            </span>

                            <h3>

                                <a href="{{ route('agenda.show', $item['slug']) }}">

                                    {{ $item['title'] }}

                                </a>

                            </h3>

                            <div class="related-card__meta">

                                <span>

                                    <i class="bi bi-calendar-event"></i>

                                    {{ $item['full_date'] }}

                                </span>

                            </div>

                            <div class="related-card__meta">

                                <span>

                                    <i class="bi bi-clock"></i>

                                    {{ $item['time'] }}

                                </span>

                            </div>

                            <div class="related-card__meta">

                                <span>

                                    <i class="bi bi-geo-alt"></i>

                                    {{ $item['location'] }}

                                </span>

                            </div>

                            <a
                                href="{{ route('agenda.show', $item['slug']) }}"
                                class="related-card__button">

                                Lihat Detail

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

<section class="agenda-detail-cta">

    <div class="container">

        <div class="agenda-detail-cta__wrapper">

            <span>

                AGENDA NAGARI

            </span>

            <h2>

                Mari Berpartisipasi Dalam
                Kegiatan Nagari Sinyamu

            </h2>

            <p>

                Pemerintah Nagari Sinyamu mengajak seluruh masyarakat
                untuk berpartisipasi aktif dalam setiap kegiatan,
                musyawarah, pelatihan, maupun kegiatan sosial demi
                mewujudkan nagari yang maju, mandiri, dan sejahtera.

            </p>

            <div class="news-detail-cta__buttons">

                <a
                    href="{{ route('agenda') }}"
                    class="btn-primary-custom">

                    Kembali ke Agenda

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
