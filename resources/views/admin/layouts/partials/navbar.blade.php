<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>

    </ul>

    <ul class="navbar-nav ms-auto">

        <li class="nav-item dropdown">

            <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="fas fa-user-circle"></i>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="dropdown-item">
                        Logout
                    </button>

                </form>

            </div>

        </li>

    </ul>

</nav>
