@extends('layouts.frontend')

@push('styles')
    @vite('resources/css/contact.css')
@endpush

@section('title', 'Hubungi Kami - Nagari Sinyamu')

@section('content')

    {{-- Hero --}}
    <section class="contact-hero">
        <div class="container">
            <div class="hero-content text-center">

                <span class="section-badge">
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

    {{-- Contact Person --}}
    <section class="contact-person-section">

        <div class="container">

            <div class="section-heading">

                <span class="section-badge">
                    Contact Person
                </span>

                <h2>
                    Hubungi Perangkat Nagari
                </h2>

                <p>
                    Pilih contact person sesuai kebutuhan Anda. Pemerintah Nagari Sinyamu siap membantu memberikan pelayanan dan informasi kepada masyarakat.
                </p>

            </div>

            <div class="row g-4">

                @foreach ($contactPersons as $person)

                    <div class="col-lg-6">

                        <div class="contact-card h-100">

                            <div class="contact-photo">

                                <img src="{{ asset($person['photo']) }}"
                                    alt="{{ $person['name'] }}">

                            </div>

                            <div class="contact-info">

                                <h3>
                                    {{ $person['name'] }}
                                </h3>

                                <span class="position">
                                    {{ $person['position'] }}
                                </span>

                                <div class="contact-detail">

                                    <i class="bi bi-telephone-fill"></i>

                                    <span>
                                        {{ $person['phone'] }}
                                    </span>

                                </div>

                                <div class="contact-detail">

                                    <i class="bi bi-envelope-fill"></i>

                                    <span>
                                        {{ $person['email'] }}
                                    </span>

                                </div>

                                <a href="https://wa.me/{{ $person['whatsapp'] }}"
                                    target="_blank"
                                    class="btn-contact">

                                    <i class="bi bi-whatsapp"></i>

                                    Hubungi WhatsApp

                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- Contact Form --}}
    <section class="contact-form-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-5">

                    <div class="form-information">

                        <span class="section-badge">
                            Kirim Pesan
                        </span>

                        <h2>
                            {{ $form['title'] }}
                        </h2>

                        <p>
                            {{ $form['subtitle'] }}
                        </p>

                    </div>

                </div>

                <div class="col-lg-7">

                    <form class="contact-form">

                        <div class="row g-3">

                            <div class="col-md-6">

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nama Lengkap">

                            </div>

                            <div class="col-md-6">

                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Email">

                            </div>

                            <div class="col-12">

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nomor HP">

                            </div>

                            <div class="col-12">

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Subjek">

                            </div>

                            <div class="col-12">

                                <textarea
                                    rows="6"
                                    class="form-control"
                                    placeholder="Pesan"></textarea>

                            </div>

                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="btn-submit">

                                    {{ $form['button'] }}

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

    {{-- FAQ --}}
    <section class="faq-section">

        <div class="container">

            <div class="section-heading">

                <span class="section-badge">
                    FAQ
                </span>

                <h2>
                    Pertanyaan yang Sering Diajukan
                </h2>

            </div>

            <div class="accordion"
                id="faqAccordion">

                @foreach ($faq as $index => $item)

                    <div class="accordion-item">

                        <h2 class="accordion-header">

                            <button
                                class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq{{ $index }}">

                                {{ $item['question'] }}

                            </button>

                        </h2>

                        <div
                            id="faq{{ $index }}"
                            class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                            data-bs-parent="#faqAccordion">

                            <div class="accordion-body">

                                {{ $item['answer'] }}

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- CTA --}}
    <section class="contact-cta">

        <div class="container">

            <div class="cta-box">

                <h2>
                    {{ $cta['title'] }}
                </h2>

                <p>
                    {{ $cta['description'] }}
                </p>

                <a href="{{ route('home') }}"
                    class="btn-cta">

                    {{ $cta['button'] }}

                </a>

            </div>

        </div>

    </section>

@endsection
