@extends('layouts.app')

@push('styles')
    @vite('resources/css/profile.css')
@endpush

@push('scripts')
    @vite('resources/js/profile.js')
@endpush

@section('title', 'Profil Nagari')

@section('content')

{{-- =========================================================
    HERO
========================================================= --}}
<section class="profile-hero">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <span class="hero-badge">
                    {{ $hero['badge'] }}
                </span>

                <h1 class="display-3 fw-bold mt-4">
                    {{ $hero['title'] }}
                </h1>

                <p class="lead mt-3">
                    {{ $hero['subtitle'] }}
                </p>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================
    SAMBUTAN
========================================================= --}}
<section class="about-nagari">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-5 text-center">
                <div class="leader-photo">
                    <img
                        src="{{ $welcome['photo'] }}"
                        alt="{{ $welcome['name'] }}"
                        loading="lazy">
                </div>
            </div>

            <div class="col-lg-7">

                <span class="section-label">Sambutan</span>

                <h2 class="section-title">
                    Sambutan Wali Nagari
                </h2>

                <h4 class="fw-bold">
                    {{ $welcome['name'] }}
                </h4>

                <p class="text-success fw-semibold">
                    {{ $welcome['position'] }}
                </p>

                <p class="mt-4">
                    {{ $welcome['greeting'] }}
                </p>

                @foreach($welcome['paragraphs'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach

                <a href="#sejarah" class="btn btn-success btn-lg mt-3">
                    Pelajari Lebih Lanjut
                </a>

            </div>

        </div>
    </div>
</section>

{{-- =========================================================
    SEJARAH
========================================================= --}}
<section id="sejarah" class="history-section">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-label">
                Sejarah
            </span>

            <h2 class="section-title">
                Perjalanan Berdirinya Nagari
            </h2>

            <p class="text-muted section-description">
                Sejarah berdirinya Nagari Sinyamu sebagai dasar pembangunan menuju masa depan yang lebih baik.
            </p>

        </div>

        <div class="history-card text-center mx-auto">

            <div class="history-icon">
                <i class="bi bi-bank"></i>
            </div>

            <span class="history-date">
                {{ $history['date'] }}
            </span>

            <h3 class="history-title">
                {{ $history['title'] }}
            </h3>

            <p class="history-text">
                {{ $history['description'] }}
            </p>

        </div>

    </div>

</section>

{{-- =========================================================
    VISI & MISI
========================================================= --}}
<section id="visi-misi" class="vision-section py-5">

<div class="container">

<div class="text-center mb-5">

<span class="section-label">Visi & Misi</span>

<h2 class="section-title">Arah Pembangunan Nagari</h2>

</div>

<div class="row g-4">

<div class="col-lg-6">

<div class="profile-card h-100">

<div class="icon-box">
<i class="bi bi-eye-fill" aria-hidden="true"></i>
</div>

<h3>Visi</h3>

<p class="vision-quote">
    {{ $vision }}
</p>

</div>

</div>

<div class="col-lg-6">

<div class="profile-card h-100">

<div class="icon-box">
<i class="bi bi-bullseye" aria-hidden="true"></i>
</div>

<h3>Misi</h3>

<ul class="mission-list">

@foreach($missions as $mission)

<li>

<i class="bi bi-check-circle-fill" aria-hidden="true"></i>

<span>{{ $mission }}</span>

</li>

@endforeach

</ul>

</div>

</div>

</div>

</div>

</section>

{{-- =========================================================
    DEMOGRAFI
========================================================= --}}
<section id="demografi" class="demography-section">

<div class="container">

<div class="text-center mb-5">

<span class="section-label">Demografi</span>

<h2 class="section-title">Gambaran Umum Nagari</h2>

</div>

<div class="row g-4">

@foreach($demography as $item)

<div class="col-lg-3 col-md-6">

<div class="stat-card h-100">

<i class="bi {{ $item['icon'] }}" aria-hidden="true"></i>

@if($item['counter'])

<h2
class="counter"
data-target="{{ $item['value'] }}">
0
</h2>

@else

<h2>{{ $item['value'] }}</h2>

@endif

<p>{{ $item['label'] }}</p>

<div class="stat-details">

    @foreach($item['details'] as $detail)

        <div class="detail-item">

            <div class="detail-left">

                <i class="bi {{ $detail['icon'] }}"></i>

                <span>{{ $detail['label'] }}</span>

            </div>

            @if($detail['value'] !== '')

                <strong>{{ $detail['value'] }}</strong>

            @endif

        </div>

    @endforeach

</div>

</div>

</div>

@endforeach

</div>

</div>

</section>

{{-- =========================================================
    GEOGRAFIS
========================================================= --}}
<section id="geografis" class="geography-section">

<div class="container">

<div class="text-center mb-5">

<span class="section-label">Geografis</span>

<h2 class="section-title">Letak Wilayah Nagari</h2>

</div>

<div class="row g-5">

<div class="col-lg-7">

<div class="map-card">

<div class="ratio ratio-16x9">

<iframe
src="{{ $geography['map'] }}"
loading="lazy"
style="border:0;"
allowfullscreen
referrerpolicy="no-referrer-when-downgrade">
</iframe>

</div>

</div>

</div>

<div class="col-lg-5">

<div class="profile-card">

<h3 class="mb-4">Informasi Wilayah</h3>

@foreach($geography['items'] as $item)

<div class="geo-item">

    <strong>{{ $item['label'] }}</strong>

    <span>{{ $item['value'] }}</span>

</div>

@endforeach

</div>

</div>

</div>

</div>

</section>

{{-- =========================================================
    CTA
========================================================= --}}
<section class="profile-cta">

<div class="container">

<div class="cta-box text-center">

<h2>{{ $cta['title'] }}</h2>

<p>{{ $cta['description'] }}</p>

<a href="{{ route('contact') }}"
class="btn btn-success btn-lg px-5">

{{ $cta['button'] }}

</a>

</div>

</div>

</section>

@endsection
