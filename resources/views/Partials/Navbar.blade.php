<nav id="main-navbar"
     class="navbar is-fixed-top px-16 {{ request()->is('/') ? 'navbar-white-text' : 'navbar-white-bg' }}"
     style="background-color: {{ request()->is('/') ? 'transparent' : 'white' }}; box-shadow: none;"
     role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a class="navbar-item" href="./">
            <img src="{{ asset('asset/logo/logo-smp.png') }}" style="max-height: 4rem;" alt="Logo">
            <div class="is-flex is-flex-direction-column is-justify-content-center ml-2">
                <p class="has-text-weight-bold is-size-6 navbar-text-color">Sekolah Menengah Pertama</p>
                <p class="is-size-9 navbar-text-color">KARYA GUNA JAYA</p>
            </div>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu is-flex is-align-items-center is-justify-content-space-between">
        <div class="navbar-start is-flex is-justify-content-center is-align-items-center w-full">
            <a class="ml-5 navbar-text-color" href="{{ url('/') }}">Beranda</a>

            {{-- <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                    <a class="ml-5 navbar-text-color" href="#" aria-haspopup="true" aria-controls="dropdown-menu4">Profile</a>
                    <i class="fas fa-angle-down navbar-text-color" aria-hidden="true"></i>
                </div>
                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                    <div class="dropdown-content">
                        <a href="{{ route('profile.struktur') }}" class="dropdown-item has-text-weight-semibold" style="color: black">Struktur Organisasi</a>
                        <a href="{{ route('profile.kepala') }}" class="dropdown-item has-text-weight-semibold" style="color: black">Kepala Sekolah</a>
                        <a href="{{ route('profile.pendidik') }}" class="dropdown-item has-text-weight-semibold" style="color: black">Pendidik</a>
                        <a href="{{ route('profile.ekstrakulikuler') }}" class="dropdown-item has-text-weight-semibold" style="color: black">Ekstrakulikuler</a>
                    </div>
                </div>
            </div> --}}

            <a class="ml-5 navbar-text-color" href="{{ route('profile.index') }}">Profil</a>
            <a class="ml-5 navbar-text-color {{ request()->is('#berita') || request()->routeIs('app.news.*') ? 'active-nav-link' : '' }}" href="{{ url('/') }}#berita">Info</a>
            <a class="ml-5 navbar-text-color {{ request()->is('#galeri') || request()->routeIs('app.gallery.*') ? 'active-nav-link' : '' }}" href="{{ url('/') }}#galeri">Galeri</a>
            <a class="ml-5 navbar-text-color {{ request()->is('#kontak') ? 'active-nav-link' : '' }}" href="{{ url('/') }}#kontak">Kontak</a>
        </div>

        {{-- @dd(Auth::user()->email) --}}
        <div class="navbar-end is-flex is-align-items-center">
            @if (isset(Auth::user()->email))
            <div class="flex items-center space-x-3">
                <div class="relative">
                    @if(auth()->user()->profile_photo)
                        <img src="{{ asset(auth()->user()->profile_photo) }}" alt="Profile Photo" class="w-10 h-10 rounded-full object-cover border-2 border-gray-200">
                    @else
                        <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center">
                            <span class="text-gray-500 text-lg font-semibold">{{ substr(auth()->user()->name, 0, 1) }}</span>
                        </div>
                    @endif
                </div>
                <div class="text-sm">
                    <p class="font-medium text-gray-900">{{ auth()->user()->name }}</p>
                    <p class="text-gray-500">{{ auth()->user()->role }}</p>
                </div>
                 <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>

            @else

            <div class="navbar-item">
                <div class="buttons">
                    <a href="{{ route('siswa.index') }}" class="button is-link !text-white">Pendaftaran</a>
                </div>
            </div>
            @endif

        </div>

    </div>
</nav>

<style>
    .navbar-white-text .navbar-text-color,
    .navbar-white-text .navbar-text-color:visited,
    .navbar-white-text .navbar-text-color:active,
    .navbar-white-text .navbar-text-color:focus,
    .navbar-white-text .navbar-text-color:hover,
    .navbar-white-text .navbar-burger span,
    .navbar-white-text .navbar-burger {
        color: #fff !important;
        fill: #fff !important;
    }

    .navbar-white-bg .navbar-text-color,
    .navbar-white-bg .navbar-text-color:visited,
    .navbar-white-bg .navbar-text-color:active,
    .navbar-white-bg .navbar-text-color:focus,
    .navbar-white-bg .navbar-text-color:hover,
    .navbar-white-bg .navbar-burger span,
    .navbar-white-bg .navbar-burger {
        color: #222 !important;
        fill: #222 !important;
    }

    #main-navbar {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .navbar-white-bg {
        background-color: white !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById('main-navbar');

        // Cek apakah sedang di halaman beranda
        const isHomePage = @json(request()->is('/'));

        function updateNavbarTextColor() {
            if (isHomePage) {
                if (window.scrollY > 0) {
                    navbar.classList.remove('navbar-white-text');
                    navbar.classList.add('navbar-white-bg');
                    navbar.style.backgroundColor = 'white';
                } else {
                    navbar.classList.add('navbar-white-text');
                    navbar.classList.remove('navbar-white-bg');
                    navbar.style.backgroundColor = 'transparent';
                }
            }
        }

        if (isHomePage) {
            updateNavbarTextColor();
            window.addEventListener('scroll', updateNavbarTextColor);
        }
    });
</script>
