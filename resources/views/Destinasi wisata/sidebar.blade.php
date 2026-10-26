<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory — Denpasar Institute</title>
    <meta name="description" content="Directory pariwisata Denpasar Institute — akomodasi, travel & experience, dan kuliner.">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    @vite(['resources/css/LP/Destinasi wisata/sidebar.css' , 'resources/js/sidebar.js' ])
</head>
<body>
<script id="directory-data" type="application/json">{!! json_encode($directoryData, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}</script>
<script>window.__INITIAL_CATEGORY__="{{ $initialCategory }}";window.__INITIAL_GROUP__="{{ $initialGroup }}";</script>

<div class="app-container" id="appContainer">
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <div class="logo-box">DI</div>
            <div class="logo-text">
                <strong>Denpasar Institute</strong>
                <span>Tourism Directory</span>
            </div>
        </div>

        <nav class="sidebar-menu" aria-label="Kategori">

            <div class="menu-group {{ $initialGroup==='akomodasi'?'open':'' }}" data-group="akomodasi">
                <button class="menu-heading" type="button" aria-expanded="{{ $initialGroup==='akomodasi'?'true':'false' }}">
                    <span class="menu-heading-left">
                        <iconify-icon icon="solar:bed-outline"></iconify-icon>
                        AKOMODASI
                    </span>
                    <iconify-icon icon="solar:alt-arrow-down-linear" class="arrow-icon"></iconify-icon>
                </button>
                <div class="submenu {{ $initialGroup==='akomodasi'?'show':'' }}">
                    <button class="submenu-item {{ $initialCategory==='hotel'?'active':'' }}" data-category="hotel"><iconify-icon icon="solar:buildings-2-outline"></iconify-icon>Hotel</button>
                    <button class="submenu-item {{ $initialCategory==='villa'?'active':'' }}" data-category="villa"><iconify-icon icon="solar:home-2-outline"></iconify-icon>Villa</button>
                    <button class="submenu-item {{ $initialCategory==='resort'?'active':'' }}" data-category="resort"><iconify-icon icon="solar:buildings-3-outline"></iconify-icon>Resort</button>
                    <button class="submenu-item {{ $initialCategory==='homestay'?'active':'' }}" data-category="homestay"><iconify-icon icon="solar:home-outline"></iconify-icon>Homestay</button>
                    <button class="submenu-item {{ $initialCategory==='hostel'?'active':'' }}" data-category="hostel"><iconify-icon icon="solar:bed-outline"></iconify-icon>Hostel</button>
                    <button class="submenu-item {{ $initialCategory==='apartment'?'active':'' }}" data-category="apartment"><iconify-icon icon="solar:city-outline"></iconify-icon>Apartment</button>
                </div>
            </div>

            <div class="menu-group {{ $initialGroup==='travel'?'open':'' }}" data-group="travel">
                <button class="menu-heading" type="button" aria-expanded="{{ $initialGroup==='travel'?'true':'false' }}">
                    <span class="menu-heading-left">
                        <iconify-icon icon="solar:map-outline"></iconify-icon>
                        TRAVEL & EXPERIENCE
                    </span>
                    <iconify-icon icon="solar:alt-arrow-down-linear" class="arrow-icon"></iconify-icon>
                </button>
                <div class="submenu {{ $initialGroup==='travel'?'show':'' }}">
                    <button class="submenu-item {{ $initialCategory==='paket-wisata'?'active':'' }}" data-category="paket-wisata"><iconify-icon icon="solar:suitcase-outline"></iconify-icon>Paket Wisata</button>
                    <button class="submenu-item {{ $initialCategory==='private-tour'?'active':'' }}" data-category="private-tour"><iconify-icon icon="solar:map-outline"></iconify-icon>Private Tour</button>
                    <button class="submenu-item {{ $initialCategory==='open-trip'?'active':'' }}" data-category="open-trip"><iconify-icon icon="solar:users-group-rounded-outline"></iconify-icon>Open Trip</button>
                    <button class="submenu-item {{ $initialCategory==='aktivitas'?'active':'' }}" data-category="aktivitas"><iconify-icon icon="solar:running-2-outline"></iconify-icon>Aktivitas</button>
                    <button class="submenu-item {{ $initialCategory==='rental-kendaraan'?'active':'' }}" data-category="rental-kendaraan"><iconify-icon icon="solar:car-outline"></iconify-icon>Rental Kendaraan</button>
                    <button class="submenu-item {{ $initialCategory==='airport-transfer'?'active':'' }}" data-category="airport-transfer"><iconify-icon icon="solar:airplane-outline"></iconify-icon>Airport Transfer</button>
                    <button class="submenu-item {{ $initialCategory==='boat-ferry'?'active':'' }}" data-category="boat-ferry"><iconify-icon icon="solar:ship-outline"></iconify-icon>Boat / Ferry</button>
                    <button class="submenu-item {{ $initialCategory==='tour-guide'?'active':'' }}" data-category="tour-guide"><iconify-icon icon="solar:user-outline"></iconify-icon>Tour Guide</button>
                </div>
            </div>

            <div class="menu-group {{ $initialGroup==='food'?'open':'' }}" data-group="food">
                <button class="menu-heading" type="button" aria-expanded="{{ $initialGroup==='food'?'true':'false' }}">
                    <span class="menu-heading-left">
                        <iconify-icon icon="solar:chef-hat-outline"></iconify-icon>
                        FOOD
                    </span>
                    <iconify-icon icon="solar:alt-arrow-down-linear" class="arrow-icon"></iconify-icon>
                </button>
                <div class="submenu {{ $initialGroup==='food'?'show':'' }}">
                    <button class="submenu-item {{ $initialCategory==='restaurant'?'active':'' }}" data-category="restaurant"><iconify-icon icon="solar:chef-hat-outline"></iconify-icon>Restaurant</button>
                    <button class="submenu-item {{ $initialCategory==='cafe'?'active':'' }}" data-category="cafe"><iconify-icon icon="bi:cup-hot"></iconify-icon>Cafe</button>
                    <button class="submenu-item {{ $initialCategory==='local-food'?'active':'' }}" data-category="local-food"><iconify-icon icon="solar:plate-outline"></iconify-icon>Local Food</button>
                    <button class="submenu-item {{ $initialCategory==='fine-dining'?'active':'' }}" data-category="fine-dining"><iconify-icon icon="boxicons:wine"></iconify-icon>Fine Dining</button>
                </div>
            </div>

        </nav>

        <a href="{{ route('listing.create') }}" class="add-listing-link" aria-label="Tambah listing baru">
        <span class="add-listing">
            <iconify-icon icon="solar:add-circle-linear"></iconify-icon>
            Add New Listing
        </span>
        </a>
    </aside>

    <main class="main-content" id="mainContent">
        <div class="top-bar">
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Buka menu">
                <iconify-icon icon="solar:hamburger-menu-linear"></iconify-icon>
            </button>
            <div class="page-heading">
                <h1 id="pageTitle">{{ $directoryData[$initialCategory]['title'] }}</h1>
                <p id="pageDescription">{{ $directoryData[$initialCategory]['description'] }}</p>
            </div>
            <button class="back-button" type="button" onclick="history.back()">
                <iconify-icon icon="solar:arrow-left-linear"></iconify-icon> Back
            </button>
        </div>

        <section class="filter-section" aria-label="Filter">
            <div class="filter-group location-filter">
                <label for="locationSearch">LOKASI</label>
                <div class="input-wrapper">
                    <iconify-icon icon="solar:map-point-linear"></iconify-icon>
                    <input type="text" id="locationSearch" placeholder="Cari lokasi, nama...">
                </div>
            </div>
            <div class="filter-group">
                <label id="filterLabel1" for="qualityFilter">{{ $directoryData[$initialCategory]['filterLabel'] ?? 'FILTER' }}</label>
                <select id="qualityFilter"></select>
            </div>
            <div class="filter-group">
                <label for="priceFilter">KISARAN HARGA</label>
                <select id="priceFilter">
                    <option value="all">Semua Harga</option>
                    <option value="low">Di bawah Rp 1 Juta</option>
                    <option value="medium">Rp 1 - 5 Juta</option>
                    <option value="high">Di atas Rp 5 Juta</option>
                </select>
            </div>
            <button class="search-button" id="searchBtn" type="button">
                <iconify-icon icon="solar:magnifer-linear"></iconify-icon> Cari
            </button>
        </section>

        <div class="result-info">
            <p>Menampilkan <strong id="resultCount">0</strong> hasil</p>
            <select id="sortFilter" aria-label="Urutkan">
                <option value="default">Rekomendasi</option>
                <option value="rating">Rating tertinggi</option>
                <option value="lowPrice">Harga terendah</option>
                <option value="highPrice">Harga tertinggi</option>
            </select>
        </div>

        <section class="card-container" id="cardContainer" aria-live="polite"></section>

        <div class="empty-state" id="emptyState">
            <iconify-icon icon="solar:magnifer-zoom-out-linear"></iconify-icon>
            <h3>Data tidak ditemukan</h3>
            <p>Coba ubah kata kunci atau filter pencarian.</p>
        </div>
    </main>
</div>

<div class="sidebar-overlay" id="sidebarOverlay"></div>
</body>
</html>