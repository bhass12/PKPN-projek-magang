@extends('layout.app')
@section('title', 'Beranda — Pusat Kajian Pariwisata Nusantara')

@push('styles')
    @vite(['resources/css/LP/beranda.css', 'resources/js/beranda.js'])
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="home-hero" id="beranda">
    <div class="home-hero-bg">
        <img src="{{ asset('img/Frame 8.png') }}" alt="Pusat Kajian Pariwisata Nusantara" loading="eager">
        <div class="home-hero-overlay"></div>
    </div>
    
    <div class="home-hero-container">
        <div class="home-hero-grid">
            <div class="home-hero-left">
                <div class="home-hero-badge">
                    <span class="badge-dot"></span>
                    <span>Pusat Riset Terakreditasi Nasional · Berdiri Sejak 2015</span>
                </div>
                
                <h1 class="home-hero-title">Riset Kebijakan untuk Pariwisata Nusantara yang Berkelanjutan</h1>
                
                <p class="home-hero-desc">
                    PKPN menjembatani data empiris lapangan, sains multidisiplin, dan kearifan lokal — menghasilkan riset teruji dan rekomendasi strategis yang bekerja nyata untuk pemerintah, akademisi, dan ekosistem industri.
                </p>
                
                <div class="home-hero-actions">
                    <a href="{{ route('kajian') }}" class="btn-primary">
                        Jelajahi Hasil Kajian
                        <iconify-icon icon="solar:arrow-right-linear" class="btn-icon"></iconify-icon>
                    </a>
                    <a href="{{ route('tentang') }}" class="btn-ghost">
                        Tentang PKPN
                    </a>
                </div>

                <div class="home-hero-metrics">
                    <div class="metric-item">
                        <strong data-count-value="32">0</strong>
                        <span>Provinsi Terjangkau</span>
                    </div>
                    <div class="metric-sep" aria-hidden="true"></div>
                    <div class="metric-item">
                        <strong data-count-value="85">0</strong>
                        <span>Mitra Kolaborasi</span>
                    </div>
                    <div class="metric-sep" aria-hidden="true"></div>
                    <div class="metric-item">
                        <strong data-count-value="150">0</strong>
                        <span>Kajian & Publikasi</span>
                    </div>
                </div>
            </div>

            {{-- SPOTLIGHT PUBLICATION CARD --}}
            <div class="home-hero-right">
                <article class="featured-report-card">
                    <div class="report-card-media">
                        <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=800&q=80" alt="Laporan Prioritas Pariwisata">
                        <span class="report-tag">Laporan Unggulan 2025</span>
                    </div>
                    <div class="report-card-body">
                        <h2 class="report-card-title">Valuasi Ekonomi & Ketahanan Destinasi Bahari di 10 Titik Prioritas</h2>
                        <p class="report-card-excerpt">
                            Analisis komprehensif valuasi jasa ekosistem pesisir, daya dukung destinasi, dan kerangka adaptasi fiskal daerah wisata.
                        </p>
                        <div class="report-card-meta">
                            <span><iconify-icon icon="solar:document-text-outline"></iconify-icon> 84 Halaman</span>
                            <span><iconify-icon icon="solar:check-circle-outline"></iconify-icon> Policy Brief Terbit</span>
                        </div>
                        <a href="{{ url('/publikasi#dampak-pariwisata') }}" class="report-card-link">
                            Akses Dokumen Laporan
                            <iconify-icon icon="solar:arrow-right-up-linear"></iconify-icon>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

{{-- KNOWLEDGE PILLARS / EKOSISTEM --}}
<section class="home-ecosystem">
    <div class="home-container">
        <div class="section-header">
            <h2 class="section-title">Ekosistem Pengetahuan & Riset PKPN</h2>
            <p class="section-subtitle">
                Infrastruktur data dan ruang kolaborasi multidisiplin yang menghubungkan akademisi, penentu kebijakan, dan pengelola destinasi.
            </p>
        </div>

        <div class="ecosystem-grid">
            <a href="{{ url('/publikasi') }}" class="ecosystem-card">
                <div class="card-top">
                    <span class="card-icon"><iconify-icon icon="solar:document-add-linear"></iconify-icon></span>
                    <span class="card-badge">150+ Judul</span>
                </div>
                <h3 class="card-title">Publikasi & Dokumen Kebijakan</h3>
                <p class="card-desc">Laporan studi berkala, policy brief bagi kementerian dan pemerintah daerah, jurnal ilmiah, serta buku referensi pariwisata.</p>
                <span class="card-action">Buka Koleksi Publikasi <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></span>
            </a>

            <a href="{{ route('kajian') }}" class="ecosystem-card">
                <div class="card-top">
                    <span class="card-icon"><iconify-icon icon="solar:chart-2-linear"></iconify-icon></span>
                    <span class="card-badge">3 Bidang</span>
                </div>
                <h3 class="card-title">Kajian & Studi Tematik</h3>
                <p class="card-desc">Pemetaan daya saing destinasi, analisis pariwisata berkelanjutan, adaptasi iklim, hingga konservasi warisan budaya Nusantara.</p>
                <span class="card-action">Jelajahi Bidang Kajian <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></span>
            </a>

            <a href="{{ route('destinasi wisata') }}" class="ecosystem-card">
                <div class="card-top">
                    <span class="card-icon"><iconify-icon icon="solar:map-point-linear"></iconify-icon></span>
                    <span class="card-badge">38 Provinsi</span>
                </div>
                <h3 class="card-title">Direktori Destinasi Provinsi</h3>
                <p class="card-desc">Dokumentasi terstruktur potensi, amenitas, tata kelola, dan sebaran geografis daya tarik wisata di seluruh provinsi Indonesia.</p>
                <span class="card-action">Buka Direktori Provinsi <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></span>
            </a>

        </div>
    </div>
</section>

{{-- PUBLICATION CTA SECTION --}}
<section class="home-publication-cta">
    <div class="home-container">
        <div class="section-header">
            <h2 class="section-title">Akses Publikasi & Dokumentasi Riset</h2>
            <p class="section-subtitle">Temukan laporan unggulan, policy brief, dan analisis tematik yang siap diakses oleh penentu kebijakan, akademisi, dan praktisi.</p>
        </div>

        <div class="pub-cta-grid">
            {{-- CARD 1: POLICY BRIEFS --}}
            <a href="{{ url('/publikasi#policy-brief') }}" class="pub-cta-card">
                <div class="pub-card-image">
                    <img src="{{ asset('img/jepang.png') }}" alt="Policy Brief & Rekomendasi Kebijakan" loading="lazy">
                    <div class="pub-card-overlay"></div>
                </div>
                <div class="pub-card-content">
                    <h3 class="pub-card-title">Dampak Ekonomi Pariwisata</h3>
                    <p class="pub-card-desc">Ringkasan eksekutif dan rekomendasi operasional untuk kementerian, gubernur, dan bupati di 32+ provinsi.</p>
                    <span class="pub-card-cta">Akses Policy Brief <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></span>
                </div>
            </a>

            {{-- CARD 2: RESEARCH PAPERS --}}
            <a href="{{ url('/publikasi#research-paper') }}" class="pub-cta-card">
                <div class="pub-card-image">
                    <img src="{{ asset('img/bali.png')}}" alt="Makalah Riset & Jurnal Ilmiah" loading="lazy">
                    <div class="pub-card-overlay"></div>
                </div>
                <div class="pub-card-content">
                    <h3 class="pub-card-title">Pengembangan Desa Wisata</h3>
                    <p class="pub-card-desc">Temuan metodologi terdepan, analisis data spasial-ekonomi, dan publikasi jurnal internasional terindeks.</p>
                    <span class="pub-card-cta">Baca Makalah Riset <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></span>
                </div>
            </a>

            {{-- CARD 3: CASE STUDIES --}}
            <a href="{{ url('/publikasi#case-study') }}" class="pub-cta-card">
                <div class="pub-card-image">
                    <img src="{{ asset('img/pantai.png')}}" alt="Studi Kasus & Analisis Wilayah" loading="lazy">
                    <div class="pub-card-overlay"></div>
                </div>
                <div class="pub-card-content">
                    <h3 class="pub-card-title">Valuasi Terumbu Karang</h3>
                    <p class="pub-card-desc">Dokumentasi mendalam tentang pengalaman praktis, best practice, dan pembelajaran dari destinasi unggulan di Indonesia.</p>
                    <span class="pub-card-cta">Jelajahi Studi Kasus <iconify-icon icon="solar:arrow-right-linear"></iconify-icon></span>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- CURATED DESTINATIONS TEASER --}}
<section class="home-destinations">
    <div class="home-container">
        <div class="dest-section-top">
            <div>
                <h2 class="section-title">Dokumentasi Lanskap & Wilayah</h2>
                <p class="section-subtitle">Studi kasus dan pemetaan potensi destinasi unggulan berbasis identitas kultural dan kelestarian alam.</p>
            </div>
            <a href="{{ route('destinasi wisata') }}" class="btn-outline-dark">
                Lihat Semua Direktori
                <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
            </a>
        </div>

        <div class="dest-showcase-grid">
            <article class="dest-showcase-card">
                <div class="dest-media">
                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=800&q=80" alt="Provinsi Bali" loading="lazy">
                    <span class="dest-pill">KEPULAUAN NUSA TENGGARA</span>
                </div>
                <div class="dest-info">
                    <h3 class="dest-name">Bali</h3>
                    <p class="dest-summary">Studi daya dukung lingkungan, ketahanan budaya lokal, dan tata ruang desa wisata berkelanjutan.</p>
                    <a href="{{ route('Destinasi Wisata.lokasi', 'bali') }}" class="dest-link">
                        Telusuri Kajian Wilayah
                        <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </a>
                </div>
            </article>

            <article class="dest-showcase-card">
                <div class="dest-media">
                    <img src="{{ asset('img/yogyakarta/prambanan.png') }}" alt="DI Yogyakarta" loading="lazy">
                    <span class="dest-pill">PULAU JAWA</span>
                </div>
                <div class="dest-info">
                    <h3 class="dest-name">DI Yogyakarta</h3>
                    <p class="dest-summary">Penguatan ekosistem cagar budaya, integrasi desa wisata candi, dan ekonomi kreatif berbasis kearifan lokal.</p>
                    <a href="{{ route('Destinasi Wisata.lokasi', 'di-yogyakarta') }}" class="dest-link">
                        Telusuri Kajian Wilayah
                        <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </a>
                </div>
            </article>

            <article class="dest-showcase-card">
                <div class="dest-media">
                    <img src="{{ asset('img/ntt/pulau-komodo.png') }}" alt="Nusa Tenggara Timur" loading="lazy">
                    <span class="dest-pill">KEPULAUAN NUSA TENGGARA</span>
                </div>
                <div class="dest-info">
                    <h3 class="dest-name">Nusa Tenggara Timur</h3>
                    <p class="dest-summary">Konservasi biosfer komodo, pariwisata bahari berkelanjutan, dan valuasi sosial-ekonomi masyarakat pesisir.</p>
                    <a href="{{ route('Destinasi Wisata.lokasi', 'nusa-tenggara-timur') }}" class="dest-link">
                        Telusuri Kajian Wilayah
                        <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

{{-- INSTITUTIONAL CALLOUT / ABOUT SUMMARY --}}
<section class="home-institutional">
    <div class="home-container">
        <div class="institutional-box">
            <div class="inst-grid">
                <div class="inst-media">
                    <img src="{{ asset('img/nusantara.png') }}" alt="Pusat Kajian Pariwisata Nusantara" loading="lazy">
                </div>
                <div class="inst-content">
                    <h2 class="inst-title">Riset yang Menggerakkan Kebijakan Nyata</h2>
                    <p class="inst-text">
                        PKPN didirikan pada tahun 2015 di bawah naungan Divisi Riset & Inovasi Denpasar Institute. Melalui pendekatan ilmiah yang disiplin dan jaringan lapangan yang kuat, kami menyajikan rekomendasi yang dapat diterapkan langsung oleh pengambil keputusan di tingkat nasional dan daerah.
                    </p>
                    <div class="inst-pillars-list">
                        <div class="pillar-row">
                            <iconify-icon icon="solar:check-circle-bold" class="pillar-check"></iconify-icon>
                            <span>Metodologi teruji melalui mixed-method dan valuasi ekonomi sumber daya.</span>
                        </div>
                        <div class="pillar-row">
                            <iconify-icon icon="solar:check-circle-bold" class="pillar-check"></iconify-icon>
                            <span>Jejaring 85+ mitra strategis di tingkat kementerian, kampus, dan dinas daerah.</span>
                        </div>
                        <div class="pillar-row">
                            <iconify-icon icon="solar:check-circle-bold" class="pillar-check"></iconify-icon>
                            <span>Hasil rekomendasi telah diadopsi dan diintegrasikan di lebih dari 32 provinsi.</span>
                        </div>
                    </div>
                    <div class="inst-cta-wrap">
                        <a href="{{ route('tentang') }}" class="btn-primary">
                            Profil Lengkap Lembaga
                            <iconify-icon icon="solar:arrow-right-linear" class="btn-icon"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-call/>
@endsection