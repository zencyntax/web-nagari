<nav class="navbar navbar-expand-lg navbar-custom fixed-top">

    <div class="container">

        {{-- Logo --}}
        <a href="/" class="navbar-brand d-flex align-items-center">

            <img
                src="{{ asset('assets/images/logo.png') }}"
                alt="Logo Nagari"
                class="logo">

            <div class="ms-3">

                <h5 class="mb-0">
                    Nagari Sinyamu
                </h5>

                <small>
                    Kabupaten Sijunjung
                </small>

            </div>

        </a>

        {{-- Toggle Mobile --}}
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        {{-- Menu --}}
        <div
            class="collapse navbar-collapse"
            id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a href="/" class="nav-link active">
                        Beranda
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="{{url('/profil')}}"
                        aria-expanded="false">

                        Profile

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                            href="{{ url('/profil#sejarah') }}">
                                Sejarah
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="{{ url('/profil#visi-misi') }}">
                                Visi & Misi
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                            href="{{ url('/profil#demografi') }}">
                                Demografi
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Pemerintahan
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        UMKM
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Agenda
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Galeri
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Kontak
                    </a>
                </li>

                <li class="nav-item ms-lg-3">

                    <a href="#"
                        class="btn btn-warning px-4">

                        Login

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>
