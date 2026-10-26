<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajukan Listing Baru — Denpasar Institute</title>
    <meta name="description" content="Ajukan usaha atau layanan wisata Anda untuk ditinjau dan ditampilkan di directory Denpasar Institute.">
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    @vite(['resources/css/LP/Destinasi wisata/sidebar.css', 'resources/css/LP/Destinasi wisata/add-listing.css'])
</head>
<body>
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
            <div class="menu-group open" data-group="akomodasi">
                <button class="menu-heading" type="button" aria-expanded="true">
                    <span class="menu-heading-left">
                        <iconify-icon icon="solar:bed-outline"></iconify-icon>
                        AKOMODASI
                    </span>
                    <iconify-icon icon="solar:alt-arrow-down-linear" class="arrow-icon"></iconify-icon>
                </button>
                <div class="submenu show">
                    <a class="submenu-item" href="/destinasi/side?category=hotel"><iconify-icon icon="solar:buildings-2-outline"></iconify-icon>Hotel</a>
                    <a class="submenu-item" href="/destinasi/side?category=villa"><iconify-icon icon="solar:home-2-outline"></iconify-icon>Villa</a>
                    <a class="submenu-item" href="/destinasi/side?category=resort"><iconify-icon icon="solar:buildings-3-outline"></iconify-icon>Resort</a>
                    <a class="submenu-item" href="/destinasi/side?category=homestay"><iconify-icon icon="solar:home-outline"></iconify-icon>Homestay</a>
                    <a class="submenu-item" href="/destinasi/side?category=hostel"><iconify-icon icon="solar:bed-outline"></iconify-icon>Hostel</a>
                    <a class="submenu-item" href="/destinasi/side?category=apartment"><iconify-icon icon="solar:city-outline"></iconify-icon>Apartment</a>
                </div>
            </div>

            <div class="menu-group" data-group="travel">
                <button class="menu-heading" type="button" aria-expanded="false">
                    <span class="menu-heading-left">
                        <iconify-icon icon="solar:map-outline"></iconify-icon>
                        TRAVEL & EXPERIENCE
                    </span>
                    <iconify-icon icon="solar:alt-arrow-down-linear" class="arrow-icon"></iconify-icon>
                </button>
                <div class="submenu">
                    <a class="submenu-item" href="/destinasi/side?category=paket-wisata"><iconify-icon icon="solar:suitcase-outline"></iconify-icon>Paket Wisata</a>
                    <a class="submenu-item" href="/destinasi/side?category=private-tour"><iconify-icon icon="solar:map-outline"></iconify-icon>Private Tour</a>
                    <a class="submenu-item" href="/destinasi/side?category=open-trip"><iconify-icon icon="solar:users-group-rounded-outline"></iconify-icon>Open Trip</a>
                    <a class="submenu-item" href="/destinasi/side?category=aktivitas"><iconify-icon icon="solar:running-2-outline"></iconify-icon>Aktivitas</a>
                    <a class="submenu-item" href="/destinasi/side?category=rental-kendaraan"><iconify-icon icon="solar:car-outline"></iconify-icon>Rental Kendaraan</a>
                    <a class="submenu-item" href="/destinasi/side?category=airport-transfer"><iconify-icon icon="solar:airplane-outline"></iconify-icon>Airport Transfer</a>
                    <a class="submenu-item" href="/destinasi/side?category=boat-ferry"><iconify-icon icon="solar:ship-outline"></iconify-icon>Boat / Ferry</a>
                    <a class="submenu-item" href="/destinasi/side?category=tour-guide"><iconify-icon icon="solar:user-outline"></iconify-icon>Tour Guide</a>
                </div>
            </div>

            <div class="menu-group" data-group="food">
                <button class="menu-heading" type="button" aria-expanded="false">
                    <span class="menu-heading-left">
                        <iconify-icon icon="solar:chef-hat-outline"></iconify-icon>
                        FOOD
                    </span>
                    <iconify-icon icon="solar:alt-arrow-down-linear" class="arrow-icon"></iconify-icon>
                </button>
                <div class="submenu">
                    <a class="submenu-item" href="/destinasi/side?category=restaurant"><iconify-icon icon="solar:chef-hat-outline"></iconify-icon>Restaurant</a>
                    <a class="submenu-item" href="/destinasi/side?category=cafe"><iconify-icon icon="bi:cup-hot"></iconify-icon>Cafe</a>
                    <a class="submenu-item" href="/destinasi/side?category=local-food"><iconify-icon icon="solar:plate-outline"></iconify-icon>Local Food</a>
                    <a class="submenu-item" href="/destinasi/side?category=fine-dining"><iconify-icon icon="boxicons:wine"></iconify-icon>Fine Dining</a>
                </div>
            </div>
        </nav>

        <a href="{{ route('listing.create') }}" class="add-listing-link is-current" aria-label="Tambah listing baru" aria-current="page">
            <span class="add-listing">
                <iconify-icon icon="solar:add-circle-linear"></iconify-icon>
                Add New Listing
            </span>
        </a>
    </aside>

    <main class="main-content" id="mainContent">
        <header class="listing-topbar">
            <div class="listing-title-row">
                <button class="mobile-menu-btn" id="mobileMenuBtn" type="button" aria-label="Buka menu">
                    <iconify-icon icon="solar:hamburger-menu-linear"></iconify-icon>
                </button>
                <div class="listing-heading">
                    <a class="listing-back" href="{{ route('directory') }}">
                        <iconify-icon icon="solar:arrow-left-linear"></iconify-icon>
                        Kembali
                    </a>
                    <h1>Ajukan Listing Baru</h1>
                    <p>Tampilkan usaha Anda di directory dan bantu wisatawan menemukan pengalaman yang tepat.</p>
                </div>
            </div>
            <div class="listing-header-actions">
                <div class="review-note">
                    <iconify-icon icon="solar:info-circle-linear"></iconify-icon>
                    <span>Pengajuan akan ditinjau tim kami sebelum ditampilkan di directory.</span>
                </div>
                <div class="partner-chip">
                    <iconify-icon icon="solar:user-outline"></iconify-icon>
                    Partner
                </div>
            </div>
        </header>

        @if (session('success'))
            <div class="form-alert" role="status">
                <iconify-icon icon="solar:check-circle-bold"></iconify-icon>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="form-alert form-alert--error" role="alert">
                <iconify-icon icon="solar:danger-triangle-bold"></iconify-icon>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        @if ($errors->any())
            <div class="form-alert form-alert--error" role="alert">
                <iconify-icon icon="solar:danger-triangle-bold"></iconify-icon>
                <div>
                    <strong>Periksa kembali isian berikut:</strong>
                    <ul class="error-list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form class="listing-layout" id="listingForm" action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="listing-form-card">
                <section class="listing-section" aria-labelledby="company-heading">
                    <div class="section-heading">
                        <span class="section-icon"><iconify-icon icon="solar:buildings-2-bold"></iconify-icon></span>
                        <div>
                            <h2 id="company-heading">Informasi Perusahaan</h2>
                            <p>Lengkapi data perusahaan atau pengelola usaha Anda.</p>
                        </div>
                    </div>

                    <div class="field-grid">
                        <div class="field">
                            <label for="perusahaan">Nama Perusahaan / Usaha <span class="required-mark">*</span></label>
                            <div class="input-shell">
                                <iconify-icon icon="solar:buildings-linear"></iconify-icon>
                                <input type="text" id="perusahaan" name="perusahaan" value="{{ old('perusahaan') }}" placeholder="Contoh: Grand Hyatt Jakarta" maxlength="150" required>
                            </div>
                            @error('perusahaan') <p class="field-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="field">
                            <label for="kategori">Kategori <span class="required-mark">*</span></label>
                            <div class="input-shell">
                                <iconify-icon icon="solar:bed-outline"></iconify-icon>
                                <select id="kategori" name="kategori" required>
                                    <option value="">Pilih kategori</option>
                                    @foreach ($directoryData as $value => $category)
                                        @php($categoryLabel = preg_replace('/ Directory$/', '', $category['title']))
                                        <option value="{{ $value }}" @selected(old('kategori') === $value)>{{ $categoryLabel }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('kategori') <p class="field-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="field">
                            <label for="lokasi">Lokasi / Alamat <span class="required-mark">*</span></label>
                            <div class="input-shell">
                                <iconify-icon icon="solar:map-point-linear"></iconify-icon>
                                <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Jl. M.H. Thamrin No.1, Jakarta Pusat" maxlength="200" required>
                            </div>
                            @error('lokasi') <p class="field-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="field">
                            <label for="telepon">No. Telepon <span class="required-mark">*</span></label>
                            <div class="input-shell">
                                <iconify-icon icon="solar:phone-linear"></iconify-icon>
                                <input type="tel" id="telepon" name="telepon" value="{{ old('telepon') }}" placeholder="Contoh: 0812 3456 7890" maxlength="30" required>
                            </div>
                            @error('telepon') <p class="field-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="field">
                            <label for="email">Email <span class="required-mark">*</span></label>
                            <div class="input-shell">
                                <iconify-icon icon="solar:letter-linear"></iconify-icon>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Contoh: info@perusahaananda.com" maxlength="150" required>
                            </div>
                            @error('email') <p class="field-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="field">
                            <label for="website">Website <span class="optional-label">(opsional)</span></label>
                            <div class="input-shell">
                                <iconify-icon icon="solar:link-linear"></iconify-icon>
                                <input type="url" id="website" name="website" value="{{ old('website') }}" placeholder="https://www.perusahaananda.com" maxlength="255">
                            </div>
                            @error('website') <p class="field-error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </section>

                <section class="listing-section" aria-labelledby="description-heading">
                    <div class="description-heading">
                        <iconify-icon icon="solar:document-text-linear"></iconify-icon>
                        <span id="description-heading">Deskripsi Singkat</span>
                    </div>
                    <div class="field">
                        <label for="deskripsi">Jelaskan tentang perusahaan Anda, layanan yang ditawarkan, dan keunggulan yang dimiliki. <span class="required-mark">*</span></label>
                        <textarea id="deskripsi" name="deskripsi" maxlength="500" placeholder="Contoh: Kami adalah hotel bintang 5 yang berlokasi strategis di jantung kota..." required>{{ old('deskripsi') }}</textarea>
                        <div class="description-row">
                            <p class="field-hint">Tulis ringkas dan informatif agar wisatawan mudah mengenal usaha Anda.</p>
                            <span class="character-count" id="characterCount" aria-live="polite">0/500</span>
                        </div>
                        @error('deskripsi') <p class="field-error">{{ $message }}</p> @enderror
                    </div>
                </section>

                <section class="listing-section" aria-labelledby="media-heading">
                    <div class="section-heading">
                        <span class="section-icon"><iconify-icon icon="solar:gallery-linear"></iconify-icon></span>
                        <div>
                            <h2 id="media-heading">Foto & Media</h2>
                            <p>Unggah hingga 5 foto terbaik usaha Anda. JPG, PNG, atau WebP, maksimal 5 MB per foto.</p>
                        </div>
                    </div>

                    <div class="upload-layout">
                        <label class="upload-zone" id="uploadZone" for="foto">
                            <iconify-icon icon="solar:cloud-upload-linear"></iconify-icon>
                            <strong>Klik untuk mengunggah foto</strong>
                            <span>atau seret dan lepaskan file di sini</span>
                            <input type="file" id="foto" name="foto[]" accept="image/jpeg,image/png,image/webp" multiple aria-label="Pilih foto listing">
                        </label>
                        <div class="photo-list" id="photoList" aria-live="polite"></div>
                    </div>
                    <p class="field-hint" id="uploadFeedback" aria-live="polite">Foto akan dilampirkan pada email pengajuan.</p>
                    @error('foto') <p class="field-error">{{ $message }}</p> @enderror
                    @error('foto.*') <p class="field-error">{{ $message }}</p> @enderror
                </section>
            </div>

            <aside class="preview-panel" aria-label="Pratinjau listing">
                <div class="preview-heading">
                    <iconify-icon icon="solar:eye-linear"></iconify-icon>
                    <div>
                        <h2>Preview di Directory</h2>
                        <p>Contoh tampilan usaha Anda setelah pengajuan disetujui.</p>
                    </div>
                </div>

                <article class="listing-preview-card">
                    <div class="preview-image-wrap">
                        <img id="previewImage" src="{{ $directoryData['hotel']['items'][0]['image'] ?? '' }}" alt="Pratinjau foto listing">
                        <span class="preview-category">
                            <iconify-icon id="previewBadgeIcon" icon="solar:buildings-2-outline"></iconify-icon>
                            <span id="previewCategory">Hotel</span>
                        </span>
                    </div>
                    <div class="preview-card-body">
                        <div class="preview-card-title-row">
                            <span class="preview-category-icon"><iconify-icon id="previewMainIcon" icon="solar:buildings-2-outline"></iconify-icon></span>
                            <div class="preview-card-title">
                                <h3 id="previewName">Nama usaha Anda</h3>
                                <div class="preview-location">
                                    <iconify-icon icon="solar:map-point-linear"></iconify-icon>
                                    <span id="previewLocation">Lokasi usaha</span>
                                </div>
                            </div>
                        </div>
                        <p class="preview-description" id="previewDescription">Deskripsi singkat usaha Anda akan tampil di sini dan membantu wisatawan mengenal layanan yang ditawarkan.</p>
                    </div>
                </article>

                <div class="approval-note">
                    <iconify-icon icon="solar:check-circle-bold"></iconify-icon>
                    <span>Setelah disetujui, usaha Anda akan tampil pada kategori yang dipilih dan dapat ditemukan oleh wisatawan.</span>
                </div>
            </aside>
        </form>

        <div class="listing-footer">
            <a class="listing-button listing-button--cancel" href="{{ route('directory') }}">Batal</a>
            <button class="listing-button listing-button--submit" id="submitButton" type="submit" form="listingForm">
                <iconify-icon icon="solar:paper-plane-bold"></iconify-icon>
                Kirim Pengajuan
            </button>
        </div>
    </main>
</div>

<div class="sidebar-overlay" id="sidebarOverlay"></div>

<script>
    const listingForm = document.querySelector('.listing-layout');

    const fields = {
        company: document.getElementById('perusahaan'),
        category: document.getElementById('kategori'),
        location: document.getElementById('lokasi'),
        description: document.getElementById('deskripsi'),
        photos: document.getElementById('foto')
    };
    const categoryIcons = {
        hotel: 'solar:buildings-2-outline',
        villa: 'solar:home-2-outline',
        resort: 'solar:buildings-3-outline',
        homestay: 'solar:home-outline',
        hostel: 'solar:bed-outline',
        apartment: 'solar:city-outline',
        'paket-wisata': 'solar:suitcase-outline',
        'private-tour': 'solar:map-outline',
        'open-trip': 'solar:users-group-rounded-outline',
        aktivitas: 'solar:running-2-outline',
        'rental-kendaraan': 'solar:car-outline',
        'airport-transfer': 'solar:airplane-outline',
        'boat-ferry': 'solar:ship-outline',
        'tour-guide': 'solar:user-outline',
        restaurant: 'solar:chef-hat-outline',
        cafe: 'bi:cup-hot',
        'local-food': 'solar:plate-outline',
        'fine-dining': 'solar:wineglass-outline'
    };

    function updatePreview() {
        document.getElementById('previewName').textContent = fields.company.value.trim() || 'Nama usaha Anda';
        document.getElementById('previewLocation').textContent = fields.location.value.trim() || 'Lokasi usaha';
        document.getElementById('previewDescription').textContent = fields.description.value.trim()
            || 'Deskripsi singkat usaha Anda akan tampil di sini dan membantu wisatawan mengenal layanan yang ditawarkan.';
        document.getElementById('characterCount').textContent = `${fields.description.value.length}/500`;

        const selected = fields.category.options[fields.category.selectedIndex];
        document.getElementById('previewCategory').textContent = selected.value ? selected.textContent : 'Kategori';
        const icon = categoryIcons[selected.value] || 'solar:widget-4-linear';
        document.getElementById('previewBadgeIcon').setAttribute('icon', icon);
        document.getElementById('previewMainIcon').setAttribute('icon', icon);
    }

    [fields.company, fields.category, fields.location, fields.description].forEach((field) => {
        field.addEventListener('input', updatePreview);
        field.addEventListener('change', updatePreview);
    });

    const photoList = document.getElementById('photoList');
    const uploadFeedback = document.getElementById('uploadFeedback');
    let previewUrls = [];

    function renderPhotos() {
        previewUrls.forEach((url) => URL.revokeObjectURL(url));
        previewUrls = [];
        photoList.replaceChildren();

        Array.from(fields.photos.files).forEach((file, index) => {
            const url = URL.createObjectURL(file);
            previewUrls.push(url);

            const item = document.createElement('div');
            item.className = 'photo-thumb';

            const image = document.createElement('img');
            image.src = url;
            image.alt = `Foto listing ${index + 1}`;
            if (index === 0) document.getElementById('previewImage').src = url;

            const remove = document.createElement('button');
            remove.className = 'photo-remove';
            remove.type = 'button';
            remove.setAttribute('aria-label', `Hapus foto ${index + 1}`);
            remove.innerHTML = '<iconify-icon icon="solar:close-circle-bold"></iconify-icon>';
            remove.addEventListener('click', () => {
                const transfer = new DataTransfer();
                Array.from(fields.photos.files).forEach((selectedFile, selectedIndex) => {
                    if (selectedIndex !== index) transfer.items.add(selectedFile);
                });
                fields.photos.files = transfer.files;
                renderPhotos();
            });

            item.append(image, remove);
            photoList.append(item);
        });

        if (!fields.photos.files.length) {
            document.getElementById('previewImage').src = @json($directoryData['hotel']['items'][0]['image'] ?? '');
        }
        uploadFeedback.textContent = fields.photos.files.length
            ? `${fields.photos.files.length} foto siap dilampirkan.`
            : 'Foto akan dilampirkan pada email pengajuan.';
    }

    fields.photos.addEventListener('change', () => {
        const selectedFiles = Array.from(fields.photos.files);
        const exceededLimit = selectedFiles.length > 5;
        if (exceededLimit) {
            const transfer = new DataTransfer();
            selectedFiles.slice(0, 5).forEach((file) => transfer.items.add(file));
            fields.photos.files = transfer.files;
        }
        renderPhotos();
        if (exceededLimit) uploadFeedback.textContent = 'Maksimal 5 foto. Lima foto pertama dipilih.';
    });

    const uploadZone = document.getElementById('uploadZone');
    uploadZone.addEventListener('dragover', (event) => {
        event.preventDefault();
        uploadZone.classList.add('is-dragging');
    });
    uploadZone.addEventListener('dragleave', () => uploadZone.classList.remove('is-dragging'));
    uploadZone.addEventListener('drop', (event) => {
        event.preventDefault();
        uploadZone.classList.remove('is-dragging');
        const transfer = new DataTransfer();
        [...fields.photos.files, ...event.dataTransfer.files]
            .filter((file) => ['image/jpeg', 'image/png', 'image/webp'].includes(file.type))
            .slice(0, 5)
            .forEach((file) => transfer.items.add(file));
        fields.photos.files = transfer.files;
        renderPhotos();
    });

    listingForm.addEventListener('submit', () => {
        const submitButton = document.getElementById('submitButton');
        submitButton.disabled = true;
        submitButton.innerHTML = '<iconify-icon icon="solar:refresh-linear"></iconify-icon> Mengirim...';
    });

    document.querySelectorAll('.menu-heading').forEach((button) => {
        button.addEventListener('click', () => {
            const group = button.closest('.menu-group');
            const shouldOpen = !group.classList.contains('open');
            document.querySelectorAll('.menu-group').forEach((item) => {
                item.classList.remove('open');
                item.querySelector('.menu-heading').setAttribute('aria-expanded', 'false');
                item.querySelector('.submenu').classList.remove('show');
            });
            if (shouldOpen) {
                group.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
                group.querySelector('.submenu').classList.add('show');
            }
        });
    });

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const mobileMenuButton = document.getElementById('mobileMenuBtn');
    mobileMenuButton.addEventListener('click', () => {
        sidebar.classList.add('open');
        overlay.classList.add('active');
    });
    overlay.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
    });

    updatePreview();
</script>
</body>
</html>
