@extends('layout.app')
@section('title', 'Pusat Kajian & Data Riset — Pusat Kajian Pariwisata Nusantara')

@push('styles')
    @vite(['resources/css/LP/kajian/kajian.css', 'resources/js/kajian.js'])
@endpush

@section('content')

{{-- ===================== HERO ===================== --}}
<section class="kj-hero">
    <div class="kj-container">
        <div class="kj-hero-grid">
            <div>
                <span class="kj-badge">
                    <span class="kj-badge-dot" aria-hidden="true"></span>
                    Repositori Riset Ilmiah &amp; Kebijakan
                </span>

                <h1 class="kj-title">Pusat Data &amp; Publikasi Kajian Pariwisata</h1>

                <p class="kj-lead">
                    Koleksi naskah akademis, analisis spasial daya dukung lingkungan, valuasi
                    kearifan budaya lokal, dan rekomendasi kebijakan strategis untuk pengembangan
                    destinasi wisata Nusantara.
                </p>

                <div class="kj-hero-actions">
                    <a href="#kajian-utama" class="kj-btn kj-btn--solid">
                        Ringkasan Kajian Prioritas
                        <iconify-icon icon="solar:arrow-right-linear" class="kj-btn-icon"></iconify-icon>
                    </a>
                    <a href="#koleksi-kajian" class="kj-btn kj-btn--outline">Lihat Katalog Lengkap</a>
                </div>
            </div>

            {{-- Kartu laporan unggulan (pola featured-report-card beranda) --}}
            <a href="#kajian-utama" class="kj-featured-card">
                <div class="kj-card-media">
                    <img src="{{ asset('img/kajian-destinasi.jpg') }}" alt="Atlas Daya Saing Destinasi Nusantara" loading="eager">
                    <span class="kj-card-tag">Kajian Prioritas Nasional</span>
                </div>
                <div class="kj-card-body">
                    <h2 class="kj-card-title">Atlas Daya Saing Destinasi Nusantara</h2>
                    <p class="kj-card-excerpt">
                        Analisis multi-kriteria 32 provinsi sebagai rujukan teknis perumusan
                        Rencana Induk Pembangunan Pariwisata Daerah (RIPPARDA).
                    </p>
                    <div class="kj-card-meta">
                        <span><iconify-icon icon="solar:calendar-minimalistic-linear"></iconify-icon> Tahun Rilis 2024</span>
                        <span><iconify-icon icon="solar:map-linear"></iconify-icon> Pemodelan Spasial</span>
                    </div>
                    <span class="kj-card-link">
                        Ringkasan Kajian
                        <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- ===================== STATISTIK REPOSITORI ===================== --}}
<section class="kj-statstrip">
    <div class="kj-container">
        <dl class="kj-statgrid">
            <div class="kj-statblock">
                <strong><span data-count-value="108">0</span><span class="kj-suf">+</span></strong>
                <span>Indikator Daya Saing</span>
            </div>
            <div class="kj-statsep" aria-hidden="true"></div>
            <div class="kj-statblock">
                <strong><span data-count-value="32">0</span></strong>
                <span>Provinsi Terpetakan</span>
            </div>
            <div class="kj-statsep" aria-hidden="true"></div>
            <div class="kj-statblock">
                <strong><span data-count-value="150">0</span><span class="kj-suf">+</span></strong>
                <span>Publikasi &amp; Dokumen</span>
            </div>
            <div class="kj-statsep" aria-hidden="true"></div>
            <div class="kj-statblock">
                <strong><span data-count-value="100">0</span><span class="kj-suf">%</span></strong>
                <span>Riset Empiris Terverifikasi</span>
            </div>
        </dl>
    </div>
</section>

{{-- ===================== KAJIAN UTAMA ===================== --}}
<section class="kj-section kj-section--light" id="kajian-utama">
    <div class="kj-container">
        <div class="kj-box kj-reveal">
            <div class="kj-box-grid">
                <div class="kj-box-media">
                    <img src="{{ asset('img/kajian-destinasi.jpg') }}" alt="Atlas Daya Saing Destinasi Nusantara" loading="lazy">
                </div>

                <div>
                    <span class="kj-status">Kajian Prioritas Nasional</span>
                    <h2 class="kj-box-title">Atlas Daya Saing Destinasi Nusantara: Analisis Multi-Kriteria 32&nbsp;Provinsi</h2>

                    <p class="kj-box-text">
                        Evaluasi komprehensif terhadap kesiapan amenitas, kapasitas infrastruktur
                        perintis, rantai pasok lokal, dan tata kelola kelembagaan pariwisata daerah.
                        Digunakan sebagai rujukan teknis perumusan Rencana Induk Pembangunan
                        Pariwisata Daerah (RIPPARDA).
                    </p>

                    <div class="kj-spec">
                        <div class="kj-spec-row">
                            <iconify-icon icon="solar:check-circle-bold" class="kj-spec-icon"></iconify-icon>
                            <span><strong>Cakupan Wilayah</strong> — 32 Provinsi Terintegrasi</span>
                        </div>
                        <div class="kj-spec-row">
                            <iconify-icon icon="solar:check-circle-bold" class="kj-spec-icon"></iconify-icon>
                            <span><strong>Parameter Indeks</strong> — 108 Parameter Kuantitatif</span>
                        </div>
                        <div class="kj-spec-row">
                            <iconify-icon icon="solar:check-circle-bold" class="kj-spec-icon"></iconify-icon>
                            <span><strong>Keluaran Utama</strong> — Naskah Kebijakan Publik</span>
                        </div>
                    </div>

                    <div class="kj-hero-actions">
                        <a href="{{ route('destinasi') }}" class="kj-btn kj-btn--solid">
                            Buka Kajian Destinasi
                            <iconify-icon icon="solar:arrow-right-linear" class="kj-btn-icon"></iconify-icon>
                        </a>
                        <a href="#koleksi-kajian" class="kj-btn kj-btn--outline">Lihat Katalog Lengkap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== KATALOG KAJIAN ===================== --}}
<section class="kj-section kj-section--white" id="koleksi-kajian">
    <div class="kj-container">
        <div class="kj-header kj-reveal">
            <h2 class="kj-heading">Katalog Kajian Tematik</h2>
            <p class="kj-sub">
                Pilih topik kajian spesifik untuk membaca ringkasan riset, metodologi,
                dan rekomendasi implementatif.
            </p>
        </div>

        <div class="kj-toolbar kj-reveal">
            <div class="kj-search" role="search">
                <iconify-icon icon="solar:magnifer-linear" class="kj-search-icon"></iconify-icon>
                <input
                    id="kajian-search-input"
                    type="search"
                    placeholder="Cari judul atau ringkasan kajian…"
                    aria-label="Cari kajian"
                >
            </div>

            <div class="kj-chips" aria-label="Filter kategori kajian">
                <button type="button" class="kj-chip is-active" data-filter="all" aria-pressed="true">
                    Semua <sup class="kj-count">6</sup>
                </button>
                <button type="button" class="kj-chip" data-filter="destinasi" aria-pressed="false">
                    Destinasi <sup class="kj-count">2</sup>
                </button>
                <button type="button" class="kj-chip" data-filter="keberlanjutan" aria-pressed="false">
                    Keberlanjutan <sup class="kj-count">2</sup>
                </button>
                <button type="button" class="kj-chip" data-filter="budaya" aria-pressed="false">
                    Warisan Budaya <sup class="kj-count">2</sup>
                </button>
            </div>
        </div>

        <div class="kj-grid" id="studies-grid">

            {{-- 01 · Destinasi --}}
            <article class="kj-card kj-reveal" data-category="destinasi">
                <div class="kj-card-media">
                    <img src="{{ asset('img/kajian-destinasi.jpg') }}" alt="Kajian Destinasi Nusantara" loading="lazy">
                    <span class="kj-card-tag">Destinasi</span>
                </div>
                <div class="kj-card-info">
                    <p class="kj-card-meta-line">Pusat Kajian Pariwisata · Update 2024</p>
                    <h3 class="kj-card-title">
                        <a href="{{ route('destinasi') }}">Kajian Kapasitas &amp; Konektivitas Destinasi Kepulauan</a>
                    </h3>
                    <p class="kj-card-desc">
                        Analisis logistik perintis, aksesibilitas antarpulau, dan standar
                        amenitas penunjang pariwisata bahari di kawasan kepulauan terluar Indonesia.
                    </p>
                    <div class="kj-card-foot">
                        <span class="kj-card-stat">
                            <iconify-icon icon="solar:map-point-linear"></iconify-icon>
                            32 Provinsi Terdata
                        </span>
                        <a href="{{ route('destinasi') }}" class="kj-entry-link">
                            Akses Kajian
                            <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                        </a>
                    </div>
                </div>
            </article>

            {{-- 02 · Keberlanjutan --}}
            <article class="kj-card kj-reveal d1" data-category="keberlanjutan">
                <div class="kj-card-media">
                    <img src="{{ asset('img/rumah.png') }}" alt="Kajian Pariwisata Berkelanjutan" loading="lazy">
                    <span class="kj-card-tag">Keberlanjutan</span>
                </div>
                <div class="kj-card-info">
                    <p class="kj-card-meta-line">Divisi Lingkungan Hidup · Riset GIS Spasial</p>
                    <h3 class="kj-card-title">
                        <a href="{{ url('/destinasi#pariwisata') }}">Pemodelan Daya Dukung Lingkungan (Carrying Capacity) &amp; Pesisir</a>
                    </h3>
                    <p class="kj-card-desc">
                        Simulasi batas ambang beban kunjungan wisatawan dan proyeksi kerentanan
                        ekologis terumbu karang akibat tekanan antropogenik hingga 2030.
                    </p>
                    <div class="kj-card-foot">
                        <span class="kj-card-stat">
                            <iconify-icon icon="solar:leaf-linear"></iconify-icon>
                            12 Zona Konservasi
                        </span>
                        <a href="{{ url('/destinasi#pariwisata') }}" class="kj-entry-link">
                            Akses Kajian
                            <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                        </a>
                    </div>
                </div>
            </article>

            {{-- 03 · Budaya --}}
            <article class="kj-card kj-reveal d2" data-category="budaya">
                <div class="kj-card-media">
                    <img src="{{ asset('img/kajian-budaya.jpg') }}" alt="Kajian Warisan Budaya Nusantara" loading="lazy">
                    <span class="kj-card-tag">Warisan Budaya</span>
                </div>
                <div class="kj-card-info">
                    <p class="kj-card-meta-line">Divisi Sosial Budaya · Studi Etnografi</p>
                    <h3 class="kj-card-title">
                        <a href="{{ url('/destinasi#budaya') }}">Valuasi Ekonomi &amp; Perlindungan HKI Komunal Desa Adat</a>
                    </h3>
                    <p class="kj-card-desc">
                        Menata skema pembagian manfaat yang adil (benefit-sharing) bagi komunitas
                        adat tanpa mengikis sakralitas tradisi dan keaslian seni tenun lokal.
                    </p>
                    <div class="kj-card-foot">
                        <span class="kj-card-stat">
                            <iconify-icon icon="solar:users-group-rounded-linear"></iconify-icon>
                            18 Komunitas Adat
                        </span>
                        <a href="{{ url('/destinasi#budaya') }}" class="kj-entry-link">
                            Akses Kajian
                            <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                        </a>
                    </div>
                </div>
            </article>

            {{-- 04 · Destinasi --}}
            <article class="kj-card kj-reveal d3" data-category="destinasi">
                <div class="kj-card-media">
                    <img src="{{ asset('img/Margin.png') }}" alt="Masterplan Mandalika" loading="lazy">
                    <span class="kj-card-tag">Destinasi</span>
                </div>
                <div class="kj-card-info">
                    <p class="kj-card-meta-line">Pusat Kebijakan Publik · Studi Terapan</p>
                    <h3 class="kj-card-title">
                        <a href="{{ route('destinasi') }}">Evaluasi Penataan Koridor Wisata Prioritas Nasional</a>
                    </h3>
                    <p class="kj-card-desc">
                        Integrasi infrastruktur modern sirkuit internasional dengan kawasan
                        konservasi perbukitan dan pemberdayaan pelaku UMKM lokal di sekitarnya.
                    </p>
                    <div class="kj-card-foot">
                        <span class="kj-card-stat">
                            <iconify-icon icon="solar:document-text-linear"></iconify-icon>
                            Dokumen Evaluasi
                        </span>
                        <a href="{{ route('destinasi') }}" class="kj-entry-link">
                            Akses Kajian
                            <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                        </a>
                    </div>
                </div>
            </article>

            {{-- 05 · Keberlanjutan --}}
            <article class="kj-card kj-reveal d4" data-category="keberlanjutan">
                <div class="kj-card-media">
                    <img src="{{ asset('img/papua/danau-sentani.png') }}" alt="Indeks Desa Wisata Hijau" loading="lazy">
                    <span class="kj-card-tag">Keberlanjutan</span>
                </div>
                <div class="kj-card-info">
                    <p class="kj-card-meta-line">Divisi Lingkungan Hidup · Indeks Komparatif</p>
                    <h3 class="kj-card-title">
                        <a href="{{ url('/destinasi#pariwisata') }}">Indeks Desa Wisata Hijau &amp; Pengelolaan Sampah Pesisir</a>
                    </h3>
                    <p class="kj-card-desc">
                        Standarisasi indikator sirkular ekonomi pada 40 desa wisata pesisir
                        guna mengurangi kebocoran sampah plastik ke ekosistem bahari.
                    </p>
                    <div class="kj-card-foot">
                        <span class="kj-card-stat">
                            <iconify-icon icon="solar:home-smile-linear"></iconify-icon>
                            40 Desa Terverifikasi
                        </span>
                        <a href="{{ url('/destinasi#pariwisata') }}" class="kj-entry-link">
                            Akses Kajian
                            <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                        </a>
                    </div>
                </div>
            </article>

            {{-- 06 · Budaya --}}
            <article class="kj-card kj-reveal d5" data-category="budaya">
                <div class="kj-card-media">
                    <img src="{{ asset('img/wayang.png') }}" alt="Arsitektur Tradisional Nusantara" loading="lazy">
                    <span class="kj-card-tag">Warisan Budaya</span>
                </div>
                <div class="kj-card-info">
                    <p class="kj-card-meta-line">Divisi Sosial Budaya · Konservasi Cagar</p>
                    <h3 class="kj-card-title">
                        <a href="{{ url('/destinasi#budaya') }}">Revitalisasi Tata Ruang Tradisional &amp; Penguatan Narasi Sejarah</a>
                    </h3>
                    <p class="kj-card-desc">
                        Pedoman kurasi narasi pemandu wisata dan konservasi material kayu
                        arsitektur rumah adat Nusantara untuk pengalaman wisata yang bermartabat.
                    </p>
                    <div class="kj-card-foot">
                        <span class="kj-card-stat">
                            <iconify-icon icon="solar:book-2-linear"></iconify-icon>
                            Pedoman Teknis
                        </span>
                        <a href="{{ url('/destinasi#budaya') }}" class="kj-entry-link">
                            Akses Kajian
                            <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                        </a>
                    </div>
                </div>
            </article>
        </div>

        {{-- Kondisi kosong saat filter tanpa hasil --}}
        <div id="no-results-msg" class="kj-empty" hidden>
            <p class="kj-empty-text">Tidak ada naskah kajian yang sesuai dengan kata kunci pencarian Anda.</p>
            <button type="button" id="reset-filter-btn" class="kj-btn kj-btn--outline">Tampilkan Semua Kajian</button>
        </div>
    </div>
</section>

{{-- ===================== METODOLOGI ===================== --}}
<section class="kj-section kj-section--light">
    <div class="kj-container">
        <div class="kj-header kj-reveal">
            <h2 class="kj-heading">Standar &amp; Integritas Metodologi Riset</h2>
            <p class="kj-sub">
                Setiap laporan dan indeks yang diterbitkan oleh PKPN melalui protokol
                ilmiah yang teruji.
            </p>
        </div>

        <ol class="kj-method-grid">
            <li class="kj-method-item kj-reveal">
                <span class="kj-method-num" aria-hidden="true">01</span>
                <h3 class="kj-method-title">Riset Lapangan &amp; Geospasial</h3>
                <p class="kj-method-desc">
                    Pengumpulan data primer langsung di lapangan yang diintegrasikan dengan
                    pemetaan koordinat GIS dan citra satelit resolusi tinggi.
                </p>
            </li>
            <li class="kj-method-item kj-reveal d1">
                <span class="kj-method-num" aria-hidden="true">02</span>
                <h3 class="kj-method-title">Kombinasi Mixed-Method</h3>
                <p class="kj-method-desc">
                    Menyeimbangkan analisis ekonometrik kuantitatif dengan wawancara mendalam
                    kualitatif bersama tetua adat dan komunitas lokal.
                </p>
            </li>
            <li class="kj-method-item kj-reveal d2">
                <span class="kj-method-num" aria-hidden="true">03</span>
                <h3 class="kj-method-title">Relevansi Kebijakan Nyata</h3>
                <p class="kj-method-desc">
                    Temuan dirumuskan menjadi naskah akademis dan rekomendasi regulasi
                    konkret yang dapat diadopsi oleh kementerian dan dinas pariwisata.
                </p>
            </li>
        </ol>
    </div>
</section>

{{-- ===================== KERJASAMA ===================== --}}
<section class="kj-section kj-section--white">
    <div class="kj-container">
        <div class="kj-box kj-reveal">
            <div class="kj-cta-grid">
                <div class="kj-cta-text">
                    <h2>Membutuhkan Kajian Mandiri atau Konsultasi Wilayah?</h2>
                    <p>
                        PKPN bermitra dengan kementerian, pemerintah provinsi/kabupaten, BUMN,
                        dan perguruan tinggi dalam penyusunan studi kelayakan, evaluasi daya
                        dukung, dan RIPPARDA.
                    </p>
                </div>
                <div class="kj-cta-actions">
                    <a href="#call" class="kj-btn kj-btn--solid">
                        Konsultasi Kerjasama
                        <iconify-icon icon="solar:arrow-right-linear" class="kj-btn-icon"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<x-call/>

@endsection
