@extends('layouts.app')

@push('styles')
    @vite('resources/css/agenda.css')
@endpush

@section('title', 'Agenda Nagari')

@section('content')

{{-- ================= HERO ================= --}}
<section class="hero-section">

    <div class="container">

        <div
            class="hero-content text-center"
            data-aos="fade-up">

            <span class="hero-badge">
                {{ $hero['badge'] }}
            </span>

            <h1>{{ $hero['title'] }}</h1>

            <p>{{ $hero['subtitle'] }}</p>

        </div>

    </div>

</section>

{{-- ================= FEATURED ================= --}}
<section class="featured-section">

    <div class="container">

        <div class="section-title text-center">

            <span>Agenda Terdekat</span>

            <h2>Kegiatan yang Akan Datang</h2>

            <p>
                Agenda utama Pemerintah Nagari Sinyamu yang akan segera dilaksanakan.
            </p>

        </div>

        <article
            class="featured-card"
            data-aos="fade-up">

            <div class="row g-0 align-items-center">

                <div class="col-lg-5">

                    <img
                        src="{{ asset($featured['image']) }}"
                        alt="{{ $featured['title'] }}"
                        loading="lazy">

                </div>

                <div class="col-lg-7">

                    <div class="featured-content">

                        <div class="featured-header">

                            <div class="calendar-card">

                                <span class="month">
                                    {{ $featured['month'] }}
                                </span>

                                <span class="day">
                                    {{ $featured['day'] }}
                                </span>

                            </div>

                            <div>

                                <h3>{{ $featured['title'] }}</h3>

                            </div>

                        </div>

                        <div class="agenda-meta">

                            <p>
                                <i class="bi bi-calendar-event-fill"></i>
                                {{ $featured['full_date'] }}
                            </p>

                            <p>
                                <i class="bi bi-clock-fill"></i>
                                {{ $featured['time'] }}
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                {{ $featured['location'] }}
                            </p>

                        </div>

                        <a
                            href="{{ route('agenda.show', $featured['slug']) }}"
                            class="btn-primary-custom">

                            {{ $featured['button'] }}

                        </a>

                    </div>

                </div>

            </div>

        </article>

    </div>

</section>

{{-- ================= DAFTAR AGENDA ================= --}}
<section class="agenda-section">

    <div class="container">

        <div class="section-title text-center">

            <span>Daftar Agenda</span>

            <h2>Agenda Kegiatan</h2>

            <p>
                Berikut beberapa agenda kegiatan Pemerintah Nagari Sinyamu.
            </p>

        </div>

        <div class="row g-4">

            @foreach ($agendas as $agenda)

                <div class="col-lg-4 col-md-6">

                    <a
                        href="{{ route('agenda.show', $agenda['slug']) }}"
                        class="agenda-card-link"
                        aria-label="Lihat detail agenda {{ $agenda['title'] }}">

                        <article
                            class="agenda-card"
                            data-aos="zoom-in">

                            <img
                                src="{{ asset($agenda['image']) }}"
                                alt="{{ $agenda['title'] }}"
                                loading="lazy">

                            <div class="agenda-card-body">

                                <div class="agenda-card-header">

                                    <div class="calendar-card">

                                        <span class="month">
                                            {{ $agenda['month'] }}
                                        </span>

                                        <span class="day">
                                            {{ $agenda['day'] }}
                                        </span>

                                    </div>

                                    <div class="agenda-card-title">

                                        <h4>{{ $agenda['title'] }}</h4>

                                    </div>

                                </div>

                                <div class="agenda-meta">

                                    <p>
                                        <i class="bi bi-calendar-event-fill"></i>
                                        {{ $agenda['full_date'] }}
                                    </p>

                                    <p>
                                        <i class="bi bi-clock-fill"></i>
                                        {{ $agenda['time'] }}
                                    </p>

                                    <p>
                                        <i class="bi bi-geo-alt-fill"></i>
                                        {{ $agenda['location'] }}
                                    </p>

                                </div>

                                <span class="detail-btn">

                                    {{ $agenda['button'] }}

                                    <i class="bi bi-arrow-right"></i>

                                </span>

                            </div>

                        </article>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>

@endsection
