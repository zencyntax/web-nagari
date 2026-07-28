<!DOCTYPE html>
<html lang="id">

<head>

    {{-- Meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Title --}}
    <title>@yield('title', 'Website Resmi Nagari Sinyamu')</title>

    {{-- SEO --}}
    <meta name="description" content="Website Resmi Pemerintah Nagari Sinyamu">
    <meta name="keywords" content="Nagari, Sinyamu, Pemerintah Nagari, UMKM, Berita, Agenda">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- AOS Animation --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css"
          rel="stylesheet">

    {{-- CSS & JS Laravel --}}
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')

</head>

<body>

    {{--
    <div id="loader">

        <div class="spinner-border text-success"
             role="status">

            <span class="visually-hidden">
                Loading...
            </span>

        </div>

    </div>
    --}}

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Content --}}
    <main>

        @yield('content')

    </main>

    {{-- Footer --}}
    @include('partials.footer')




    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>

        AOS.init({

            duration:800,
            once:true

        });

    </script>

    @stack('scripts')

</body>

</html>
