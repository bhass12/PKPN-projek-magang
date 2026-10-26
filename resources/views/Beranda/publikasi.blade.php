@extends('layout.app')
@section('title', 'Beranda')
@push('styles')
    @vite('resources/css/LP/publikasi.css')
    @section('content')


<!-- =========================================================
     HEADER
========================================================= -->

<section class="publication-header">

    <div class="publication-header-inner">

        <div class="breadcrumb">
            Beranda
            <span>›</span>
            Publikasi
            <span>›</span>
            Detail Publikasi
        </div>
        <h1>Publikasi Terbaru</h1>
        <p>
            Jelajahi berbagai hasil penelitian, kajian, dan publikasi
            mengenai perkembangan pariwisata Indonesia.
        </p>
    </div>

</section>



<!-- 01 -->
    <section class="publication-section" id="policy-brief">
    <div class="publication-main">
        <div class="publication-image">
            <img
                src="{{ asset('img/jepang.png') }}"
                alt="Dampak Pariwisata terhadap Ekonomi Lokal"
            >
            <span class="publication-number">
                01
            </span>
        </div>

        <div class="publication-content">
            <span class="publication-label">
                LAPORAN RISET
            </span>
            <h2>
                Dampak Pariwisata terhadap Ekonomi Lokal
                di 10 Destinasi Prioritas
            </h2>
            <div class="publication-meta">
                <span>
                    <iconify-icon icon="solar:calendar-linear"></iconify-icon>
                    Desember 2024
                </span>
                <span>
                    <iconify-icon icon="solar:document-text-linear"></iconify-icon>
                    Laporan Penelitian
                </span>
            </div>
            <p>
                Penelitian ini membahas dampak perkembangan pariwisata
                terhadap kondisi ekonomi masyarakat lokal di sepuluh
                destinasi wisata prioritas Indonesia.
            </p>
            <p>
                Kajian dilakukan untuk melihat bagaimana aktivitas
                pariwisata menciptakan peluang ekonomi, meningkatkan
                lapangan pekerjaan, serta memberikan kontribusi
                terhadap masyarakat di sekitar destinasi.
            </p>
        </div>
    </div>

    <div class="info-grid">
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:chart-2-linear"></iconify-icon>
            </div>
            <div>
                <span>Fokus Kajian</span>
                <strong>Ekonomi Lokal</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:map-point-linear"></iconify-icon>
            </div>
            <div>
                <span>Lokasi</span>
                <strong>10 Destinasi Prioritas</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:calendar-linear"></iconify-icon>
            </div>
            <div>
                <span>Tahun</span>
                <strong>2024</strong>
            </div>
        </div>
    </div>

    <div class="description">
        <h3>Tentang Publikasi</h3>
        <p>
            Pariwisata merupakan salah satu sektor yang memiliki
            kontribusi besar terhadap perekonomian daerah. Pertumbuhan
            destinasi wisata dapat menciptakan peluang usaha baru,
            meningkatkan pendapatan masyarakat, serta membuka
            lapangan pekerjaan.
        </p>
        <p>
            Penelitian ini memberikan gambaran mengenai hubungan
            antara aktivitas pariwisata dengan pertumbuhan ekonomi
            masyarakat lokal di berbagai destinasi prioritas Indonesia.
        </p>
    </div>
    </section>

<!-- 02 -->
    <section class="publication-section" id="research-paper">
    <div class="publication-main reverse">
        <div class="publication-image">
            <img
                src="{{ asset('img/bali.png') }}"
                alt="Rekomendasi Kebijakan Pengembangan Desa Wisata"
            >
            <span class="publication-number">
                02
            </span>
        </div>
        <div class="publication-content">
            <span class="publication-label">
                POLICY BRIEF
            </span>
            <h2>
                Rekomendasi Kebijakan untuk Pengembangan
                Desa Wisata Berkelanjutan
            </h2>
            <div class="publication-meta">
                <span>
                    <iconify-icon icon="solar:calendar-linear"></iconify-icon>
                    Februari 2025
                </span>
                <span>
                    <iconify-icon icon="solar:document-text-linear"></iconify-icon>
                    Policy Brief
                </span>
            </div>
            <p>
                Publikasi ini membahas berbagai strategi kebijakan
                yang dapat diterapkan untuk mengembangkan desa wisata
                secara berkelanjutan.
            </p>
            <p>
                Pengembangan dilakukan dengan memperhatikan potensi
                lokal, pemberdayaan masyarakat, pelestarian budaya,
                serta perlindungan terhadap lingkungan.
            </p>
        </div>
    </div>
    <div class="info-grid">
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:buildings-2-linear"></iconify-icon>
            </div>
            <div>
                <span>Fokus Kajian</span>
                <strong>Desa Wisata</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:leaf-linear"></iconify-icon>
            </div>
            <div>
                <span>Pendekatan</span>
                <strong>Pariwisata Berkelanjutan</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:calendar-linear"></iconify-icon>
            </div>
            <div>
                <span>Tahun</span>
                <strong>2025</strong>
            </div>
        </div>
    </div>
    <div class="description">
        <h3>Tentang Publikasi</h3>
        <p>
            Desa wisata memiliki potensi besar untuk menjadi penggerak
            ekonomi masyarakat sekaligus menjaga keberlangsungan
            budaya dan lingkungan lokal.
        </p>
        <p>
            Kajian ini menghasilkan sejumlah rekomendasi yang dapat
            digunakan oleh pemerintah, pengelola desa, dan pemangku
            kepentingan untuk mengembangkan desa wisata secara
            inklusif dan berkelanjutan.
        </p>
    </div>
    </section>

<!-- 03 -->
    <section class="publication-section" id="case-study">
    <div class="publication-main">
        <div class="publication-image">
            <img
                src="{{ asset('img/pantai.png') }}"
                alt="Valuasi Ekonomi Terumbu Karang"
            >
            <span class="publication-number">
                03
            </span>
        </div>
        <div class="publication-content">
            <span class="publication-label">
                KAJIAN PARIWISATA
            </span>
            <h2>
                Valuasi Ekonomi Terumbu Karang
                Bagi Pariwisata Bahari
            </h2>
            <div class="publication-meta">
                <span>
                    <iconify-icon icon="solar:calendar-linear"></iconify-icon>
                    Agustus 2025
                </span>
                <span>
                    <iconify-icon icon="solar:document-text-linear"></iconify-icon>
                    Kajian Pariwisata
                </span>
            </div>
            <p>
                Kajian ini membahas nilai ekonomi ekosistem terumbu
                karang serta kontribusinya terhadap perkembangan
                pariwisata bahari Indonesia.
            </p>
            <p>
                Penelitian juga menyoroti pentingnya pengelolaan
                ekosistem laut untuk menjaga keseimbangan antara
                manfaat ekonomi dan kelestarian lingkungan.
            </p>
        </div>
    </div>
    <div class="info-grid">
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:waterdrops-linear"></iconify-icon>
            </div>
            <div>
                <span>Fokus Kajian</span>
                <strong>Pariwisata Bahari</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:graph-up-linear"></iconify-icon>
            </div>
            <div>
                <span>Analisis</span>
                <strong>Valuasi Ekonomi</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:calendar-linear"></iconify-icon>
            </div>
            <div>
                <span>Tahun</span>
                <strong>2025</strong>
            </div>
        </div>
    </div>
    <div class="description">
        <h3>Tentang Publikasi</h3>
        <p>
            Ekosistem terumbu karang merupakan salah satu aset penting
            dalam pengembangan pariwisata bahari Indonesia.
        </p>
        <p>
            Penelitian ini memberikan gambaran mengenai manfaat
            ekonomi terumbu karang sekaligus pentingnya menjaga
            keberlanjutan ekosistem laut.
        </p>
    </div>
    </section>

<!-- 04 -->
    <section class="publication-section" id="empat">
    <div class="publication-main reverse">
        <div class="publication-image">
            <img
                src="{{ asset('img/pembangunan.png') }}"
                alt="Strategi Pengembangan Destinasi Pariwisata"
            >
            <span class="publication-number">
                04
            </span>
        </div>
        <div class="publication-content">
            <span class="publication-label">
                JURNAL
            </span>
            <h2>
                Strategi Pengembangan Destinasi
                Pariwisata Berbasis Potensi Lokal
            </h2>
            <div class="publication-meta">
                <span>
                    <iconify-icon icon="solar:calendar-linear"></iconify-icon>
                    Oktober 2025
                </span>
                <span>
                    <iconify-icon icon="solar:document-text-linear"></iconify-icon>
                    Jurnal Pariwisata
                </span>
            </div>
            <p>
                Kajian ini membahas strategi pengembangan destinasi
                wisata dengan memanfaatkan potensi alam, budaya,
                dan ekonomi masyarakat lokal.
            </p>
            <p>
                Pendekatan berbasis potensi lokal diharapkan dapat
                menghasilkan destinasi yang memiliki karakter kuat
                dan mampu memberikan manfaat bagi masyarakat.
            </p>
        </div>
    </div>
    <div class="info-grid">
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:compass-linear"></iconify-icon>
            </div>
            <div>
                <span>Fokus Kajian</span>
                <strong>Destinasi Wisata</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:people-nearby-linear"></iconify-icon>
            </div>
            <div>
                <span>Pendekatan</span>
                <strong>Potensi Lokal</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:calendar-linear"></iconify-icon>
            </div>
            <div>
                <span>Tahun</span>
                <strong>2025</strong>
            </div>
        </div>
    </div>
    <div class="description">
        <h3>Tentang Publikasi</h3>
        <p>
            Setiap daerah memiliki karakteristik dan potensi wisata
            yang berbeda. Pengembangan destinasi perlu disesuaikan
            dengan kondisi dan kekuatan lokal.
        </p>
        <p>
            Kajian ini memberikan pendekatan pengembangan destinasi
            yang mengutamakan potensi lokal sebagai identitas utama
            dalam membangun daya tarik wisata.
        </p>
    </div>
    </section>

<!-- 05 -->
    <section class="publication-section" id="potensi">
    <div class="publication-main">
        <div class="publication-image">
            <img
                src="{{ asset('img/rame.png') }}"
                alt="Transformasi Digital Pariwisata Indonesia"
            >
            <span class="publication-number">
                05
            </span>
        </div>
        <div class="publication-content">
            <span class="publication-label">
                LAPORAN RISET
            </span>
            <h2>
                Transformasi Digital dalam Pengembangan
                Pariwisata Indonesia
            </h2>
            <div class="publication-meta">
                <span>
                    <iconify-icon icon="solar:calendar-linear"></iconify-icon>
                    Januari 2026
                </span>
                <span>
                    <iconify-icon icon="solar:document-text-linear"></iconify-icon>
                    Laporan Riset
                </span>
            </div>
            <p>
                Penelitian ini mengkaji pemanfaatan teknologi digital
                dalam meningkatkan daya saing destinasi dan memberikan
                pengalaman wisata yang lebih baik.
            </p>
            <p>
                Transformasi digital mencakup pemanfaatan platform
                digital, data pariwisata, pemasaran digital, serta
                teknologi informasi dalam pengelolaan destinasi.
            </p>
        </div>
    </div>
    <div class="info-grid">
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:smartphone-linear"></iconify-icon>
            </div>
            <div>
                <span>Fokus Kajian</span>
                <strong>Digitalisasi</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:database-linear"></iconify-icon>
            </div>
            <div>
                <span>Teknologi</span>
                <strong>Data Pariwisata</strong>
            </div>
        </div>
        <div class="info-card">
            <div class="info-icon">
                <iconify-icon icon="solar:calendar-linear"></iconify-icon>
            </div>
            <div>
                <span>Tahun</span>
                <strong>2026</strong>
            </div>
        </div>
    </div>
    <div class="description">
        <h3>Tentang Publikasi</h3>
        <p>
            Perkembangan teknologi telah mengubah cara wisatawan
            mencari informasi, memilih destinasi, dan merencanakan
            perjalanan.
        </p>
        <p>
            Kajian ini membahas bagaimana transformasi digital dapat
            dimanfaatkan untuk meningkatkan kualitas layanan,
            pemasaran destinasi, serta pengelolaan data pariwisata
            Indonesia.
        </p>
    </div>
    </section>


<x-call/>

@endsection