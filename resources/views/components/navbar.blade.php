<nav class="navbar" id="navbar">
    <div class="navbar-inner">
        <a href="{{ route('beranda') }}" class="navbar-brand" aria-label="Beranda PKPN">
            <img src="{{ asset('img/logo.png') }}" alt="Logo PKPN" class="logo">
            <div class="brand-text">
                <span>PKPN</span>
                <small>Pusat Kajian Pariwisata Nusantara</small>
            </div>
        </a>

        <ul class="nav-links" id="navLinks">
            <li><a href="{{ route('beranda') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('tentang') }}" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
            <li><a href="{{ route('kajian') }}" class="{{ request()->is('kajian') ? 'active' : '' }}">Kajian</a></li>
            <li><a href="{{ route('destinasi wisata') }}" class="{{ request()->is('destinasi wisata') ? 'active' : '' }}">Destinasi Wisata</a></li>
            <li class="nav-cta-mobile"><a href="#call" class="btn btn-mobile">Ajukan Kolaborasi <iconify-icon icon="lucide:arrow-right"></iconify-icon></a></li>
        </ul>

        <div class="navbar-actions">
            <a class="btn" href="#call">
                <span>Ajukan Kolaborasi</span>
                <iconify-icon icon="lucide:arrow-up-right" width="18"></iconify-icon>
            </a>
        </div>
    </div>
</nav>