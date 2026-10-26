@extends('layout.app')
@section('title')
    {{ $data['nama'] }} - Pariwisata Indonesia
@endsection

{{-- This @vite call previously sat outside any @section, so it emitted its
     <link> and <script> tags into <body> rather than <head>. --}}
@push('styles')
    @vite(['resources/css/LP/Destinasi wisata/lokasi.css'])
@endpush

{{-- Leaflet is loaded here rather than in the layout: only this page maps. --}}
@push('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" defer></script>
@endpush

@push('scripts')
    @vite('resources/js/lokasi.js')
@endpush

@section('content')


<!-- =========================================
     MAIN
========================================= -->

<main class="province-detail">


    <!-- =====================================
         BREADCRUMB
    ====================================== -->

<div class="top-navigation">
        <div class="breadcrumb">
            <a href="/">
                Beranda
            </a>
            <span>›</span>
            <a href="{{ route('destinasi wisata') }}">
                Provinsi
            </a>
            <span>›</span>
            <span>
                {{ $data['nama'] }}
            </span>
        </div>
        <a href="{{ url()->previous() }}"
            class="back-button">
            <iconify-icon
                icon="solar:arrow-left-outline">
            </iconify-icon>
            Kembali ke Daftar Provinsi
        </a>

    </div>



    <!-- =====================================
         TITLE
    ====================================== -->

    <section class="province-heading">

        <h1>
            Pariwisata Provinsi
            {{ $data['nama'] }}
        </h1>

        <p>
            {{ $data['deskripsi'] }}
        </p>

    </section>



    <!-- =====================================
         PROVINCE SUMMARY
    ====================================== -->

    <section class="province-summary">


        <!-- MAIN INFO -->

        <div class="province-main-info">

            <span class="province-label">
                PROVINSI UTAMA
            </span>

            <h2>
                {{ $data['nama'] }}
            </h2>

            <p>

                <iconify-icon
                    icon="solar:map-point-outline">
                </iconify-icon>

                {{ $data['wilayah'] }}

            </p>

        </div>



        <!-- CAPITAL -->

        <div class="summary-box capital-box">

            <iconify-icon
                icon="solar:buildings-2-outline">
            </iconify-icon>

            <span>
                IBU KOTA
            </span>

            <strong>
                {{ $data['ibu_kota'] }}
            </strong>

        </div>



        <!-- DESTINATION -->

        <div class="summary-box destination-box">

            <iconify-icon
                icon="solar:map-outline">
            </iconify-icon>

            <span>
                DESTINASI
            </span>

            <strong>
                {{ $data['destinasi'] }}
            </strong>

        </div>



        <!-- CATEGORY -->

        <div class="summary-box category-box">

            <span class="category-title">
                KATEGORI WISATA
            </span>

            <div class="category-list">

                @foreach($data['kategori'] as $kategori)

                    <span>
                        {{ $kategori }}
                    </span>

                @endforeach

            </div>

        </div>

    </section>



    <!-- =====================================
         FILTER
    ====================================== -->

    <section class="destination-filter">

        <div class="search-box">

            <iconify-icon
                icon="solar:magnifer-outline">
            </iconify-icon>

            <input
                type="text"
                id="searchDestination"
                placeholder="Cari destinasi wisata...">

        </div>


        <select id="categoryFilter">

            <option value="">
                Semua Kategori
            </option>

            @foreach($data['kategori'] as $kategori)

                <option value="{{ strtolower($kategori) }}">
                    {{ $kategori }}
                </option>

            @endforeach

        </select>


        <select id="locationFilter">

            <option value="">
                Semua Kabupaten/Kota
            </option>

            @foreach($data['destinasi_unggulan'] as $destinasi)

                <option value="{{ strtolower($destinasi['kabupaten']) }}">
                    {{ $destinasi['kabupaten'] }}
                </option>

            @endforeach

        </select>

    </section>



    <!-- =====================================
         DESTINATION TITLE
    ====================================== -->

    <section class="destination-section">
        <div class="section-heading">
            <h2>Destinasi Unggulan</h2>
        </div>



        <!-- =================================
             DESTINATION GRID
        ================================== -->
        <div class="destination-grid"
            id="destinationGrid">
            @foreach($data['destinasi_unggulan'] as $destinasi)
                <article
                    class="destination-card"
                    data-name="{{ strtolower($destinasi['nama']) }}"
                    data-category="{{ strtolower($destinasi['kategori']) }}"
                    data-location="{{ strtolower($destinasi['kabupaten']) }}">
                    <!-- IMAGE -->
                    <div class="destination-image">
                        <img
                            src="{{ asset($destinasi['gambar']) }}"
                            alt="{{ $destinasi['nama'] }}">
                        <span class="destination-category">
                            {{ strtoupper($destinasi['kategori']) }}
                        </span>
                    </div>
                    <!-- CONTENT -->
                    <div class="destination-content">
                        <h3>
                            {{ $destinasi['nama'] }}
                        </h3>
                        <span class="destination-location">
                            <iconify-icon
                                icon="solar:map-point-outline">
                            </iconify-icon>
                            Kabupaten
                            {{ $destinasi['kabupaten'] }}
                        </span>
                        <p>
                            {{ $destinasi['deskripsi'] }}
                        </p>
                        {{-- No per-destination detail page exists, so this must not present
                             itself as a working link. Rendered as a disabled
                             control with an honest label instead. --}}
                        <span class="detail-button"
                            aria-disabled="true"
                            style="opacity:.55;cursor:not-allowed;">
                            DETAIL BELUM TERSEDIA
                            <iconify-icon
                                icon="solar:arrow-right-outline">
                            </iconify-icon>
                        </span>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

   <!-- =====================================
         MAP
    ====================================== -->
    <section class="map-section">
    <div class="map-heading">
        <div>
            <h2>
                Peta Destinasi Pariwisata
                {{ $data['nama'] }}
            </h2>
            <p>
                Eksplorasi sebaran lokasi destinasi
                wisata unggulan di seluruh wilayah
                {{ $data['nama'] }}.
            </p>
        </div>
        {{-- Dead "Buka Peta Penuh": there is no full-screen map view. The map is
             already on this page, so the control is removed rather than left
             as a link that goes nowhere. --}}
        <a href="#baliMap" class="map-jump">
            Lihat Peta di Halaman Ini ↓
        </a>
    </div>
    <div
        id="baliMap"
        class="map-container">
    </div>

</section>

<script>
    const destinationData = @json($data['destinasi_unggulan']);
</script>


</main>

@endsection