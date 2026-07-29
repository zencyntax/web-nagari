@extends('layouts.frontend')

@push('styles')
    @vite('resources/css/umkm-detail.css')
@endpush

@section('title', $umkm['name'])

@section('content')

{{-- ================= HERO ================= --}}
<section class="detail-hero">

    <div class="container">

        <nav class="breadcrumb-nav" data-aos="fade-up">

            <a href="{{ route('home') }}">Beranda</a>

            <span>/</span>

            <a href="{{ route('umkm') }}">UMKM</a>

            <span>/</span>

            <span>{{ $umkm['name'] }}</span>

        </nav>

    </div>

</section>

{{-- ================= DETAIL ================= --}}
<section class="detail-section">

    <div class="container">

        <div class="row g-5 align-items-center">

            <div
                class="col-lg-6"
                data-aos="fade-right">

                <img
                    src="{{ asset($umkm['image']) }}"
                    alt="{{ $umkm['name'] }}"
                    class="detail-image">

            </div>

            <div
                class="col-lg-6"
                data-aos="fade-left">

                <span class="category-badge">

                    {{ $umkm['category'] }}

                </span>

                <h1>

                    {{ $umkm['name'] }}

                </h1>

                <div class="info-list">

                    <div class="info-item">

                        <i class="bi bi-person-fill"></i>

                        <span>{{ $umkm['owner'] }}</span>

                    </div>

                    <div class="info-item">

                        <i class="bi bi-geo-alt-fill"></i>

                        <span>{{ $umkm['location'] }}</span>

                    </div>

                </div>

                <p class="description">

                    {{ $umkm['description'] }}

                </p>

            </div>

        </div>

    </div>

</section>

{{-- ================= GALLERY ================= --}}
<section class="gallery-section">

    <div class="container">

        <div class="section-title text-center">

            <span>Galeri</span>

            <h2>Dokumentasi UMKM</h2>

            <p>

                Beberapa dokumentasi kegiatan dan produk UMKM.

            </p>

        </div>

        <div class="row g-4">

            @foreach ($umkm['gallery'] as $image)

                <div
                    class="col-lg-4 col-md-6"
                    data-aos="zoom-in">

                    <img
                        src="{{ asset($image) }}"
                        alt="{{ $umkm['name'] }}"
                        class="gallery-image">

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- ================= CTA ================= --}}
<section class="cta-section">

    <div class="container">

        <div
            class="cta-box"
            data-aos="fade-up">

            <h2>

                Tertarik dengan Produk UMKM Ini?

            </h2>

            <p>

                Untuk informasi lebih lanjut mengenai produk maupun pelaku usaha,
                silakan menghubungi Pemerintah Nagari Sinyamu.

            </p>

            <a
                href="{{ route('contact') }}"
                class="btn-primary-custom">

                Hubungi Kami

            </a>

        </div>

    </div>

</section>

@endsection
