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
                    <a href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Beranda
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="{{url('/profile')}}"
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
                    <a href="{{ route("government")}}" class="nav-link {{ request()->routeIs('government') ? 'active' : '' }}">
                        Pemerintahan
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('umkm') }}"
                    class="nav-link {{ request()->routeIs('umkm*') ? 'active' : '' }}">
                        UMKM
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('news') }}"
                        class="nav-link {{ request()->routeIs('news*') ? 'active' : '' }}">
                        Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a
                    href="{{ route('agenda') }}"
                    class="nav-link {{ request()->routeIs('agenda*') ? 'active' : '' }}">
                    Agenda
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">
                        Kontak
                    </a>
                </li>
                {{--
                <li class="nav-item ms-lg-3">

                    <a href="#"
                        class="btn btn-warning px-4">

                        Login

                    </a>

                </li>
                --}}
            </ul>

        </div>

    </div>

</nav>
