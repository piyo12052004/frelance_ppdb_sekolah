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
            <a class="ml-5 navbar-text-color" href="">Home</a>

            <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                    <a class="ml-5 navbar-text-color" href="#" aria-haspopup="true" aria-controls="dropdown-menu4">Profile</a>
                    <i class="fas fa-angle-down navbar-text-color" aria-hidden="true"></i>
                </div>
                <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                    <div class="dropdown-content">
                        <a href="#" class="dropdown-item has-text-weight-semibold navbar-text-color">Struktur Organisasi</a>
                        <a href="#" class="dropdown-item has-text-weight-semibold navbar-text-color">Kepala Sekolah</a>
                        <a href="#" class="dropdown-item has-text-weight-semibold navbar-text-color">Pendidik</a>
                        <a href="#" class="dropdown-item has-text-weight-semibold navbar-text-color">Ekstrakulikuler</a>
                    </div>
                </div>
            </div>

            <a class="ml-5 navbar-text-color" href="">Info</a>
            <a class="ml-5 navbar-text-color" href="">Galeri</a>
            <a class="ml-5 navbar-text-color" href="">Contact</a>
        </div>

        <div class="navbar-end is-flex is-align-items-center">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="/module-pendaftaran" class="button is-link !text-white">Pendaftaran</a>
                </div>
            </div>
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
