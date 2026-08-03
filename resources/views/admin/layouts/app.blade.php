<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | CMS Nagari Sinyamu</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

    @include('admin.layouts.partials.navbar')

    @include('admin.layouts.partials.sidebar')

    <main class="app-main">

        <div class="app-content">

            <div class="container-fluid py-3">

                @yield('content')

            </div>

        </div>

    </main>

    @include('admin.layouts.partials.footer')

</div>

@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil',
    text: '{{ session('success') }}',
    confirmButtonText: 'OK'
});
</script>
@endif

</body>
</html>
