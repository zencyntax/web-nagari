@extends('layouts.app')

@push('styles')
    @vite('resources/css/umkm.css')
@endpush

@section('title', 'UMKM Nagari')

@section('content')

{{-- ================= HERO ================= --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-content text-center" data-aos="fade-up">

            <span class="hero-badge">
                {{ $hero['badge'] }}
            </span>

            <h1>
                {{ $hero['title'] }}
            </h1>

            <p>
                {{ $hero['subtitle'] }}
            </p>

        </div>
    </div>
</section>

{{-- ================= ABOUT ================= --}}
<section class="about-section">

    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6" data-aos="fade-right">

                <img
                    src="{{ asset($about['image']) }}"
                    alt="{{ $about['title'] }}"
                    class="img-fluid rounded-4 shadow">

            </div>

            <div class="col-lg-6" data-aos="fade-left">

                <h2>
                    {{ $about['title'] }}
                </h2>

                @foreach ($about['description'] as $paragraph)

                    <p>
                        {{ $paragraph }}
                    </p>

                @endforeach

            </div>

        </div>

    </div>

</section>

{{-- ================= UMKM ================= --}}
<section class="umkm-section">

    <div class="container">

        <div class="section-title text-center">

            <span>UMKM Nagari</span>

            <h2>Daftar UMKM</h2>

            <p>
                Berikut beberapa UMKM yang telah terdaftar di Nagari Sinyamu.
            </p>

        </div>

        <div class="row g-4">

            @foreach ($umkms as $umkm)

                <div class="col-lg-4 col-md-6">

                    <a
                        href="{{ route('umkm.show', $umkm['slug']) }}"
                        class="umkm-card-link">

                        <div
                            class="umkm-card"
                            data-aos="zoom-in">

                            <img
                                src="{{ asset($umkm['image']) }}"
                                alt="{{ $umkm['name'] }}">

                            <div class="card-body">

                                <span class="category-badge">

                                    {{ $umkm['category'] }}

                                </span>

                                <h4>

                                    {{ $umkm['name'] }}

                                </h4>

                                <div class="meta">

                                    <p>

                                        <i class="bi bi-person-fill"></i>

                                        {{ $umkm['owner'] }}

                                    </p>

                                    <p>

                                        <i class="bi bi-geo-alt-fill"></i>

                                        {{ $umkm['location'] }}

                                    </p>

                                </div>

                                <span class="detail-btn">

                                    {{ $umkm['button'] }}

                                    <i class="bi bi-arrow-right"></i>

                                </span>

                            </div>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- ================= JOIN ================= --}}
<section class="join-section">

    <div class="container">

        <div class="join-box" data-aos="fade-up">

            <h2>

                {{ $join['title'] }}

            </h2>

            <p>

                {{ $join['description'] }}

            </p>

            <ul>

                @foreach ($join['benefits'] as $benefit)

                    <li>

                        <i class="bi bi-check-circle-fill"></i>

                        {{ $benefit }}

                    </li>

                @endforeach

            </ul>

            <a
                href="{{ route('contact') }}"
                class="btn-primary-custom">

                {{ $join['button'] }}

            </a>

        </div>

    </div>

</section>

{{-- ================= CTA ================= --}}
<section class="cta-section">

    <div class="container">

        <div class="cta-box" data-aos="zoom-in">

            <h2>

                {{ $cta['title'] }}

            </h2>

            <p>

                {{ $cta['description'] }}

            </p>

            <a
                href="{{ route('home') }}"
                class="btn-secondary-custom">

                {{ $cta['button'] }}

            </a>

        </div>

    </div>

</section>

@endsection
