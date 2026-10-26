@extends('layout.app')
@section('title', 'Beranda')
@push('styles')
    @vite(['resources/css/LP/Destinasi wisata/provinsi.css' , 'resources/js/provinsi.js'])
    @section('content')
<section class="hero">

  <!-- =========================
       SLIDES
  ========================== -->

  <div class="slides">


<!-- SLIDE 1 -->
    <div
      class="slide active"
      style="
      background-image:
      url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1920&auto=format&fit=crop');
      "
    >

      <div class="hero-container">

        <div class="hero-content">


          <h1 class="hero-title">
            Temukan Destinasi,
            Ciptakan Cerita
          </h1>

          <p class="hero-description">
            Jelajahi tempat wisata, aktivitas seru,
            kuliner, dan pengalaman lokal terbaik
            di setiap perjalananmu.
          </p>


        </div>

      </div>

    </div>



<!-- SLIDE 2 -->
    <div
      class="slide"
      style="
      background-image:
      url('https://images.unsplash.com/photo-1473181488821-2d23949a045a?q=80&w=1920&auto=format&fit=crop');
      "
    >

      <div class="hero-container">

        <div class="hero-content">


          <h1 class="hero-title">
            Jelajahi Lebih Banyak,
            Rasakan Lebih Banyak
          </h1>

          <p class="hero-description">
            Temukan pengalaman baru, tempat menarik,
            dan aktivitas seru yang membuat perjalananmu
            semakin berkesan.
          </p>



        </div>

      </div>

    </div>



<!-- SLIDE 3 -->
    <div
      class="slide"
      style="
        background-image:
        url('https://images.unsplash.com/photo-1583417319070-4a69db38a482?q=80&w=1920&auto=format&fit=crop');
      "
    >

      <div class="hero-container">

        <div class="hero-content">


          <h1 class="hero-title">
            Temukan Spot Menarik
            di Setiap Perjalanan
          </h1>

          <p class="hero-description">
            Dari destinasi populer hingga tempat tersembunyi,
            temukan spot terbaik yang layak masuk
            dalam perjalananmu.
          </p>


        </div>

      </div>

    </div>



<!-- SLIDE 4 -->
    <div
      class="slide"
      style="
      background-image:
      url('https://images.unsplash.com/photo-1527631746610-bca00a040d60?q=80&w=1920&auto=format&fit=crop');
      "
    >

      <div class="hero-container">

        <div class="hero-content">


          <h1 class="hero-title">
            Ke Mana Petualanganmu
            Berikutnya?
          </h1>

          <p class="hero-description">
            Temukan destinasi yang sesuai dengan gaya
            perjalananmu dan mulai petualangan
            yang tak terlupakan.
          </p>


        </div>

      </div>

    </div>



<!-- SLIDE 5 -->
    <div
      class="slide"
      style="
      background-image:
      url('https://images.unsplash.com/photo-1555400038-63f5ba517a47?q=80&w=1920&auto=format&fit=crop');
      "
    >

      <div class="hero-container">

        <div class="hero-content">


          <h1 class="hero-title">
            Saatnya Menemukan
            Tempat Baru
          </h1>

          <p class="hero-description">
            Tinggalkan rutinitas dan temukan tempat baru
            yang menghadirkan pengalaman berbeda
            di setiap langkah perjalananmu.
          </p>


        </div>

      </div>

    </div>



<!-- SLIDE 6 -->
    <div
      class="slide"
      style="
      background-image:
      url('https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1920&auto=format&fit=crop');
      "
    >

      <div class="hero-container">

        <div class="hero-content">


          <h1 class="hero-title">
            Temukan Tempat yang
            Belum Pernah Kamu Temukan
          </h1>

          <p class="hero-description">
            Jelajahi hidden gems, destinasi lokal,
            dan tempat-tempat unik yang jauh
            dari keramaian.
          </p>


        </div>

      </div>

    </div>



<!-- SLIDE 7 -->
    <div
      class="slide"
      style="
      background-image:
      url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=1920&auto=format&fit=crop');
      "
    >

      <div class="hero-container">

        <div class="hero-content">


          <h1 class="hero-title">
            Temukan Pengalaman Terbaik
            di Setiap Destinasi
          </h1>

          <p class="hero-description">
            Nikmati aktivitas, budaya, kuliner,
            dan pengalaman lokal yang membuat
            perjalananmu terasa lebih berarti.
          </p>


        </div>

      </div>

    </div>



<!-- SLIDE 8 -->
    <div
      class="slide"
      style="
      background-image:
      url('https://images.unsplash.com/photo-1566438480900-0609be27a4be?q=80&w=1920&auto=format&fit=crop');
      "
    >

      <div class="hero-container">

        <div class="hero-content">


          <h1 class="hero-title">
            Mulai Perjalananmu
            dari Sini
          </h1>

          <p class="hero-description">
            Temukan tempat menginap, destinasi,
            aktivitas, restoran, dan pengalaman terbaik
            untuk perjalananmu berikutnya.
          </p>


        </div>

      </div>

    </div>

  </div>




  <!-- =========================
       CONTROLS
  ========================== -->

  <div class="slider-controls">

    <div class="dots">

      <button class="dot active"></button>
      <button class="dot"></button>
      <button class="dot"></button>
      <button class="dot"></button>
      <button class="dot"></button>
      <button class="dot"></button>
      <button class="dot"></button>
      <button class="dot"></button>

    </div>


    <div class="arrows">

      <button class="arrow" id="prev">
      </button>

      <button class="arrow" id="next">
      </button>

    </div>

  </div>

    <!-- =========================
       PROGRESS
  ========================== -->

  <div class="progress-container">

    <div
      class="progress"
      id="progress"
    ></div>

  </div>
</section>




<section class="province-section">

<!-- Cards -->
            <div class="card-container">
                <!-- Card Akomodasi -->
                <div class="explore-card">
                    <div class="icon-box">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M2 4v16"/>
                            <path d="M22 20V8a2 2 0 0 0-2-2H10a2 2 0 0 0-2 2v12"/>
                            <path d="M2 10h6"/>
                            <path d="M2 16h20"/>
                            <path d="M6 8h.01"/>
                        </svg>
                    </div>

                    <div class="card-content">
                        <h3>Akomodasi</h3>
                        <p>
                            Kelola hotel, villa, dan penginapan
                            lainnya.
                        </p>
                    </div>
                    <a href="{{ route('directory', ['category' => 'hotel']) }}" class="card-button">
                        Jelajahi akomodasi
                    </a>
                </div>


                <!-- Card Travel Agent -->
                <div class="explore-card">
                    <div class="icon-box">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M2 16h20"/>
                            <path d="M6 16l-3-5 2-1 5 3"/>
                            <path d="m10 13 8-4 2 1-5 6"/>
                            <path d="M8 8 6 4l2-1 5 4"/>
                        </svg>

                    </div>

                    <div class="card-content">

                        <h3>Travel Agent</h3>

                        <p>
                            Atur paket wisata, aktivitas, dan
                            transportasi.
                        </p>

                    </div>

                    <a href="{{ route('directory', ['category' => 'paket-wisata']) }}" class="card-button">
                        Jelajahi aktivitas
                    </a>

                </div>


                <!-- Card Restoran -->
                <div class="explore-card">

                    <div class="icon-box">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="25"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path d="M6 2v8"/>
                            <path d="M10 2v8"/>
                            <path d="M8 2v20"/>
                            <path d="M4 2v6a4 4 0 0 0 8 0V2"/>
                            <path d="M18 2v20"/>
                            <path d="M18 2c2 2 2 7 0 10"/>
                        </svg>

                    </div>

                    <div class="card-content">

                        <h3>Restoran</h3>

                        <p>
                            Manajemen reservasi dan menu
                            kuliner terbaik.
                        </p>

                    </div>

                    <a href="{{ route('directory', ['category' => 'restaurant']) }}" class="card-button">
                        Jelajahi restoran
                    </a>

                </div>

            </div>

        </div>


    <div class="province-header">
        <h2>Sortir Provinsi Seluruh Indonesia</h2>
        <p>
            Pilih provinsi untuk melihat informasi, data, dan kajian
            pariwisata berdasarkan wilayah.
        </p>
    </div>


    <!-- ========================================
     STATISTICS CARD
======================================== -->

<div class="province-statistics">

    <!-- STAT 1 -->
    <div class="stat-item">
        <div class="stat-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M3 6.5L8 4L16 6.5L21 4V17.5L16 20L8 17.5L3 20V6.5Z"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linejoin="round"/>
                <path d="M8 4V17.5"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M16 6.5V20"
                    stroke="currentColor"
                    stroke-width="1.7"/>
            </svg>
        </div>
        <div class="stat-content">
            <div class="stat-number">
                <span class="count-up" data-target="38">0</span>
            </div>
            <h3>Provinsi</h3>
            <p>Seluruh provinsi di Indonesia</p>
        </div>
    </div>


    <!-- VERTICAL DIVIDER -->
    <div class="stat-divider"></div>

    <!-- STAT 2 -->
    <div class="stat-item">
        <div class="stat-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <rect x="4" y="7" width="16" height="13" rx="2"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M8 7V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V7"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M4 12H20"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M11 12V15"
                    stroke="currentColor"
                    stroke-width="1.7"/>
            </svg>
        </div>

        <div class="stat-content">
            <div class="stat-number">
                <span class="count-up" data-target="500">0</span>+
            </div>
            <h3>Destinasi</h3>
            <p>Destinasi wisata unggulan</p>
        </div>
    </div>


    <!-- DIVIDER -->
    <div class="stat-divider"></div>

    <!-- STAT 3 -->
    <div class="stat-item">
        <div class="stat-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 21V5C4 4.45 4.45 4 5 4H15C15.55 4 16 4.45 16 5V21"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M16 9H19C19.55 9 20 9.45 20 10V21"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M8 8H10"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M12 8H14"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M8 12H10"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M12 12H14"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M8 16H10"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M12 16H14"
                    stroke="currentColor"
                    stroke-width="1.7"/>
                <path d="M2 21H22"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linecap="round"/>
            </svg>
        </div>

        <div class="stat-content">
            <div class="stat-number">
                <span class="count-up" data-target="514">0</span>
            </div>
            <h3>Kab/Kota</h3>
            <p>Kabupaten dan kota</p>
        </div>
    </div>


    <!-- DIVIDER -->
    <div class="stat-divider"></div>

    <!-- STAT 4 -->
    <div class="stat-item">
        <div class="stat-icon">
            <svg viewBox="0 0 24 24" fill="none">
                <path d="M3 18L9 8L13 13L17 6L21 18H3Z"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linejoin="round"/>
                <path d="M9 8L13 13"
                    stroke="currentColor"
                    stroke-width="1.7"/>
            </svg>
        </div>
        <div class="stat-content">
            <div class="stat-number">
                <span class="count-up" data-target="5">0</span>
            </div>
            <h3>Pulau Utama</h3>
            <p>Wilayah kepulauan Indonesia</p>
        </div>
    </div>
</div>

    <!-- CONTAINER CARD -->
    <div class="province-container" id="provinceContainer">

<!-- bali -->

        <div class="province-card dark-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'bali') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Bali</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Bali.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>150+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>9 Kabupaten/Kota</small>
            </div>
            </a>
        </div>

<!-- jakarta -->
    
        <div class="province-card light-green-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'dki-jakarta') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>DKI Jakarta</h3>
            <p>Lihat data dan informasi pariwisata Provinsi DKI Jakarta.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>80+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>6 Wilayah Administrasi</small>
            </div>
            </a>
        </div>

<!-- jabar -->
        <div class="province-card gray-card">

            <div class="province-icon">
                <a href="{{ route('Destinasi wisata.lokasi', 'jawa-barat') }}">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Jawa Barat</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Jawa Barat.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>200+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>27 Kabupaten/Kota</small>
            </div>
            </a>
        </div>

<!-- jateng -->
        <div class="province-card white-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'jawa-tengah') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Jawa Tengah</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Jawa Tengah.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>180+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>35 Kabupaten/Kota</small>
            </div>
        </a>
        </div>

<!-- yogyakarta -->
        <div class="province-card gray-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'di-yogyakarta') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>DI Yogyakarta</h3>
            <p>Lihat data dan informasi pariwisata Provinsi DI Yogyakarta.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>120+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>5 Kabupaten/Kota</small>
            </div>
            </a>
        </div>

<!-- jatim -->
        <div class="province-card green-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'jawa-timur') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Jawa Timur</h3>
            <p> Lihat data dan informasi pariwisata Provinsi Jawa Timur.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>220+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>38 Kabupaten/Kota</small>
            </div>
            </a>
        </div>

<!-- sumut -->
        <div class="province-card gray-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'sumatera-utara') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Sumatera Utara</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Sumatera Utara.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>140+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>33 Kabupaten/Kota</small>
            </div>
            </a>
        </div>

<!-- sulsel -->
        <div class="province-card outline-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'sulawesi-selatan') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Sulawesi Selatan</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Sulawesi Selatan.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>110+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>24 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


<!-- CARD TAMBAHAN -->
        <div class="province-card gray-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'sumatera-barat') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Sumatera Barat</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Sumatera Barat.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>130+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>19 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card light-green-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'riau') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Riau</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Riau.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>100+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>12 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card white-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'kepulauan-riau') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Kepulauan Riau</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Kepulauan Riau.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>90+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>7 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card green-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'lampung') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Lampung</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Lampung.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>100+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>15 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card gray-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'banten') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Banten</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Banten.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>100+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>8 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card white-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'kalimantan-barat') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Kalimantan Barat</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Kalimantan Barat.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>90+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>14 Kabupaten/Kota</small>
            </a>
            </div>
        </div>


        <div class="province-card light-green-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'kalimantan-timur') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Kalimantan Timur</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Kalimantan Timur.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>100+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>10 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card gray-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'kalimantan-selatan') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Kalimantan Selatan</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Kalimantan Selatan.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>80+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>13 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card green-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'sulawesi-utara') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Sulawesi Utara</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Sulawesi Utara.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>90+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>15 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card white-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'nusa-tenggara-barat') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Nusa Tenggara Barat</h3>
            <p>Lihat data dan informasi pariwisata Provinsi NTB.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>100+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>10 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card gray-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'nusa-tenggara-timur') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Nusa Tenggara Timur</h3>
            <p>Lihat data dan informasi pariwisata Provinsi NTT.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>100+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>22 Kabupaten/Kota</small>
            </div>
            </a>
        </div>


        <div class="province-card light-green-card extra-card">
            <a href="{{ route('Destinasi wisata.lokasi', 'papua') }}">
            <div class="province-icon">
                <iconify-icon icon="solar:map-point-outline"></iconify-icon>
            </div>
            <h3>Papua</h3>
            <p>Lihat data dan informasi pariwisata Provinsi Papua.</p>
            <div class="province-line"></div>
            <div class="province-data">
                <iconify-icon icon="akar-icons:map"></iconify-icon>
                <small>80+ Destinasi</small>
            </div>
            <div class="province-data">
                <iconify-icon icon="hugeicons:city-01"></iconify-icon>
                <small>9 Kabupaten/Kota</small>
            </div>
            </a>
        </div>
    </div>


    <!-- BUTTON -->
    <div class="more-province">
        <button id="loadMoreBtn">
            <span>Lihat Lebih Banyak</span>
            <iconify-icon icon="solar:alt-arrow-down-linear" class="arrow"></iconify-icon>
        </button>
    </div>

</section>

<x-call/>
@endsection
