@extends('layout.app')
@section('title', 'Tentang Lembaga — Pusat Kajian Pariwisata Nusantara')

@push('styles')
    @vite(['resources/css/LP/tentang.css', 'resources/js/tentang.js'])
@endpush

@section('content')

{{-- HERO SECTION --}}
<section class="about-hero">
    <div class="about-hero-container">
        <div class="about-hero-grid">
            <div class="about-hero-text">
                <div class="about-badge">
                    <span class="badge-dot"></span>
                    <span>Profil Lembaga · Berdiri Sejak 2015</span>
                </div>
                
                <h1 class="about-title">Menghubungkan Data, Sains, dan Kearifan Lokal</h1>
                
                <p class="about-lead">
                    Pusat Kajian Pariwisata Nusantara (PKPN) hadir sebagai pusat pemikiran independen dan ruang kolaborasi multidisiplin. Kami mengubah temuan riset empiris menjadi rekomendasi kebijakan strategis yang berdaya guna nyata bagi ekosistem pariwisata Indonesia.
                </p>

                <div class="about-actions">
                    <a href="#misi" class="btn-primary">
                        Lima Pilar Misi
                        <iconify-icon icon="solar:arrow-right-linear" class="btn-icon"></iconify-icon>
                    </a>
                    <a href="{{ route('kajian') }}" class="btn-outline">
                        Jelajahi Kajian
                    </a>
                </div>
            </div>

            <div class="about-hero-media">
                <div class="hero-image-frame">
                    <img src="{{ asset('img/tentang.png') }}" alt="Aktivitas Riset PKPN" loading="eager">
                    <div class="frame-caption">
                        <strong>10 Tahun Riset Berdampak (2015—2025)</strong>
                        <span>Divisi Riset & Inovasi Denpasar Institute</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- INSTITUTIONAL SUMMARY STRIP --}}
<section class="about-metrics-strip">
    <div class="about-container">
        <div class="metrics-grid">
            <div class="metric-block">
                <strong data-count-value="10">0</strong><span> Tahun</span>
                <span>Dedikasi Riset Pariwisata (2015—2025)</span>
            </div>
            <div class="metric-sep" aria-hidden="true"></div>
            <div class="metric-block">
                <strong data-count-value="32">0</strong><span>+ Provinsi</span>
                <span>Cakupan Studi Empiris Lapangan</span>
            </div>
            <div class="metric-sep" aria-hidden="true"></div>
            <div class="metric-block">
                <strong data-count-value="85">0</strong><span>+ Mitra</span>
                <span>Jejaring Kampus, Pemerintah, & Industri</span>
            </div>
            <div class="metric-sep" aria-hidden="true"></div>
            <div class="metric-block">
                <strong data-count-value="150">0</strong><span>+ Kajian</span>
                <span>Publikasi & Dokumen Kebijakan</span>
            </div>
        </div>
    </div>
</section>

{{-- VISI & MISI SECTION --}}
<section class="about-mission-section" id="misi">
    <div class="about-container">
        <div class="mission-header">
            <h2 class="section-heading">Visi & Misi Strategis</h2>
            <p class="section-lead">
                Kerangka arah kelembagaan untuk memandu riset terapan dan transformasi pariwisata Indonesia yang inklusif dan lestari.
            </p>
        </div>

        {{-- VISION CARD --}}
        <div class="vision-box">
            <div class="vision-tag">Visi Kelembagaan</div>
            <blockquote class="vision-quote">
                &ldquo;Menjadi pusat kajian pariwisata Nusantara yang unggul, terpercaya, dan berakar pada kelestarian ekologis serta identitas budaya bangsa — mendorong destinasi yang berdaya saing global untuk kesejahteraan masyarakat.&rdquo;
            </blockquote>
        </div>

        {{-- 5 PILLARS OF MISSION --}}
        <div class="mission-pillars-grid">
            <div class="pillar-card">
                <span class="pillar-num">01</span>
                <h3 class="pillar-title">Penelitian Berkualitas</h3>
                <p class="pillar-desc">
                    Melakukan penelitian multidisiplin berbasis mixed-method, valuasi ekonomi sumber daya, dan analisis spasial GIS yang relevan dengan isu kontemporer.
                </p>
            </div>

            <div class="pillar-card">
                <span class="pillar-num">02</span>
                <h3 class="pillar-title">Kebijakan Berbasis Bukti</h3>
                <p class="pillar-desc">
                    Menyusun naskah akademis, policy brief, dan rekomendasi regulasi yang terukur bagi kementerian serta dinas pariwisata provinsi dan kabupaten/kota.
                </p>
            </div>

            <div class="pillar-card">
                <span class="pillar-num">03</span>
                <h3 class="pillar-title">Inovasi & Daya Saing Destinasi</h3>
                <p class="pillar-desc">
                    Mengembangkan instrumen evaluasi daya dukung lingkungan (carrying capacity), ketahanan iklim, dan tata kelola destinasi berkelanjutan.
                </p>
            </div>

            <div class="pillar-card">
                <span class="pillar-num">04</span>
                <h3 class="pillar-title">Kolaborasi Multipihak</h3>
                <p class="pillar-desc">
                    Membangun jembatan sinergi yang inklusif antara pembuat kebijakan, akademisi, asosiasi industri pariwisata, dan masyarakat desa adat.
                </p>
            </div>

            <div class="pillar-card">
                <span class="pillar-num">05</span>
                <h3 class="pillar-title">Diseminasi & Edukasi Publik</h3>
                <p class="pillar-desc">
                    Menyebarluaskan hasil riset melalui penerbitan jurnal, simposium nasional, program pelatihan kepemimpinan, dan portal data terbuka.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CORE VALUES --}}
<section class="about-values-section">
    <div class="about-container">
        <div class="mission-header">
            <h2 class="section-heading">Prinsip & Nilai Dasar Riset</h2>
            <p class="section-lead">Komitmen integritas ilmiah yang melandasi setiap kajian dan publikasi PKPN.</p>
        </div>

        <div class="values-grid">
            <div class="value-item">
                <div class="value-icon"><iconify-icon icon="solar:chart-2-linear"></iconify-icon></div>
                <h3 class="value-title">Data-Driven & Rigor</h3>
                <p class="value-desc">Setiap rekomendasi berakar pada pengumpulan data lapangan yang valid dan pengujian saintifik yang independen.</p>
            </div>

            <div class="value-item">
                <div class="value-icon"><iconify-icon icon="solar:leaf-linear"></iconify-icon></div>
                <h3 class="value-title">Kelestarian Ekologis</h3>
                <p class="value-desc">Menempatkan daya dukung alam dan keberlanjutan lingkungan hidup sebagai batas fundamental pembangunan wisata.</p>
            </div>

            <div class="value-item">
                <div class="value-icon"><iconify-icon icon="solar:users-group-rounded-linear"></iconify-icon></div>
                <h3 class="value-title">Inklusivitas Budaya</h3>
                <p class="value-desc">Menghormati kearifan lokal, hak masyarakat adat, dan pelestarian warisan budaya Nusantara tanpa komodifikasi dangkal.</p>
            </div>

            <div class="value-item">
                <div class="value-icon"><iconify-icon icon="solar:shield-check-linear"></iconify-icon></div>
                <h3 class="value-title">Dampak Aplikatif</h3>
                <p class="value-desc">Riset tidak berhenti pada laporan arsip, melainkan bertransformasi menjadi instrumen praktis pemulihan ekonomi daerah.</p>
            </div>
        </div>
    </div>
</section>

{{-- INSTITUTIONAL BACKGROUND --}}
<section class="about-story-section">
    <div class="about-container">
        <div class="story-layout">
            <div class="story-image-wrap">
                <img src="{{ asset('img/nusantara.png') }}" alt="Peta Nusantara" loading="lazy">
            </div>
            <div class="story-content">
                <h2 class="section-heading">Rekam Jejak Kelembagaan</h2>
                <p class="story-p">
                    Pusat Kajian Pariwisata Nusantara beroperasi sebagai unit kajian strategis di bawah naungan Denpasar Institute. Sejak tahun 2015, PKPN telah aktif mendampingi puluhan destinasi nasional dan daerah dalam merumuskan rencana induk pariwisata (RIPPARDA), studi dampak sosial-ekonomi, dan valuasi terumbu karang.
                </p>
                <p class="story-p">
                    Dengan dukungan peneliti lintas disiplin ilmu — mulai dari perencanaan wilayah, ekonomi lingkungan, antropologi budaya, hingga sains data spasial — kami terus berkontribusi membangun fondasi pariwisata Indonesia yang tangguh menghadapi pergeseran global.
                </p>
                <div class="story-cta-box">
                    <a href="{{ route('program') }}" class="btn-primary">
                        Ikuti Program PKPN
                        <iconify-icon icon="solar:arrow-right-linear" class="btn-icon"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<x-call/>
@endsection
