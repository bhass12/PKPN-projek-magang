@extends('layout.app')
@section('title', 'Kajian Destinasi — PKPN')

@push('styles')
    @vite('resources/css/LP/kajian/destinasi.css')
@endpush

@php
    /* ===== Data mini untuk section =====
       Pisahkan data dari markup supaya view tetap ringkas & mudah dirawat. */
    /* proyek unggulan ditampilkan penuh, sisanya ringkas */
    $projectMain = [
        'status'  => 'Berjalan',
        'img'     => 'img/mandalika.png',
        'title'   => 'Rancangan Induk Kawasan Konservasi Mandalika',
        'desc'    => 'Studi komprehensif yang mengintegrasikan kebutuhan infrastruktur pariwisata modern dengan pelestarian ekosistem pesisir rentan — mencakup pemetaan zona, skenario pembangunan, dan protokol adaptasi iklim.',
        'meta'    => [['icon' => 'lucide:map-pin', 'text' => 'Mandalika, NTB'], ['icon' => 'lucide:calendar-days', 'text' => '2024 — 2026']],
        'link'    => 'Lihat Laporan Interim',
        'fill'    => 72,
    ];

    $projectSide = [
        [
            'tag'    => 'Analisis Spasial',
            'status' => 'Berjalan',
            'img'    => 'img/kajian-keberlanjutan.jpg',
            'title'  => 'Pemetaan Ketahanan Iklim Pesisir Bali',
            'desc'   => 'Model prediktif GIS untuk mitigasi risiko infrastruktur pariwisata 2024–2050.',
            'meta'   => 'Bali · 2025',
            'fill'   => 45,
        ],
        [
            'tag'    => 'Daya Saing',
            'status' => 'Berjalan',
            'img'    => 'img/pariwisata.png',
            'title'  => 'Indeks Inklusivitas Desa Wisata Joglosemar',
            'desc'   => 'Pengukuran kontribusi ekonomi lokal versus kebocoran investasi pada 40 desa.',
            'meta'   => 'Joglosemar · 2025',
            'fill'   => 88,
        ],
    ];

    $metrics = [
        ['icon' => 'lucide:sparkles', 'label' => 'Daya Tarik', 'to' => 85, 'dec' => 0, 'suffix' => '%', 'fill' => 85, 'desc' => 'Skor indeks kepuasan wisatawan'],
        ['icon' => 'lucide:route', 'label' => 'Aksesibilitas', 'to' => 50, 'dec' => 0, 'suffix' => ' km', 'fill' => 78, 'desc' => 'Rata-rata radius interkoneksi transportasi'],
        ['icon' => 'lucide:bed-double', 'label' => 'Amenitas', 'to' => 4.2, 'dec' => 1, 'suffix' => 'K', 'fill' => 66, 'desc' => 'Unit akomodasi terverifikasi berkelanjutan'],
        ['icon' => 'lucide:landmark', 'label' => 'Tata Kelola', 'to' => 36, 'dec' => 0, 'suffix' => '', 'fill' => 54, 'desc' => 'Kelembagaan komunitas teruji'],
        ['icon' => 'lucide:megaphone', 'label' => 'Pemasaran', 'to' => 2.4, 'dec' => 1, 'suffix' => 'M', 'fill' => 88, 'desc' => 'Jangkauan audiens kampanye terukur'],
        ['icon' => 'lucide:award', 'label' => 'Daya Saing', 'to' => 5, 'dec' => 0, 'prefix' => 'Top ', 'suffix' => '', 'fill' => 92, 'desc' => 'Peringkat destinasi unggulan nasional'],
    ];

    $pillars = [
        [
            'icon' => 'lucide:badge-dollar-sign',
            'title' => 'Pertumbuhan Ekonomi',
            'desc'  => 'Dampak ekonomi pariwisata terhadap pendapatan asli daerah, penyerapan tenaga kerja, dan pengembangan model bisnis yang tangguh.',
        ],
        [
            'icon' => 'lucide:leaf',
            'title' => 'Kelestarian Lingkungan',
            'desc'  => 'Pengukuran jejak karbon, manajemen limbah terpadu, restorasi ekosistem, dan preservasi keanekaragaman hayati area unggulan.',
        ],
        [
            'icon' => 'lucide:users-round',
            'title' => 'Keberlanjutan Sosial',
            'desc'  => 'Evaluasi inklusi masyarakat, pelestarian warisan budaya, dan partisipasi aktif komunitas dalam setiap tahapan pengambilan keputusan.',
        ],
    ];

    $collection = [
        [
            'img'    => 'img/wayang.png',
            'cat'    => 'Antropologi Seni',
            'title'  => 'Bayang-Bayang Filosofi: Wayang Kulit di Era Modernitas',
            'desc'   => 'Analisis transformasi peran dalang dari figur spiritual komunal menjadi pelestari seni dalam konteks industri hiburan daerah.',
            'meta'   => 'Vol. 42 / Isu 03 — 2023',
        ],
        [
            'img'    => 'img/tari.png',
            'cat'    => 'Etnografi Ritual',
            'title'  => 'Dinamika Ruang Sakral & Komodifikasi Desa Adat',
            'desc'   => 'Evaluasi standarisasi tata krama wisatawan dan dampaknya terhadap kesakralan ruang komunal masyarakat adat di Bali.',
            'meta'   => 'Vol. 42 / Isu 02 — 2023',
        ],
        [
            'img'    => 'img/Margin.png',
            'cat'    => 'Arsitektur Vernakular',
            'title'  => 'Interpretasi Materialitas Sejarah Maritim Sriwijaya',
            'desc'   => 'Narasi preservasi yang mengedarkan kearifan lokal konstruksi pesisir kuno untuk memandu restorasi pariwisata sejarah.',
            'meta'   => 'Vol. 41 / Isu 09 — 2022',
        ],
    ];
@endphp

@section('content')

{{-- ===================== HERO ===================== --}}
<section class="dst-hero">
    <div class="dst-container">
        <div class="dst-hero-grid">
            <div>
                <span class="dst-badge">
                    <span class="dst-badge-dot" aria-hidden="true"></span>
                    Dossier Riset Lapangan
                </span>

                <h1 class="dst-title">Kajian Destinasi Nusantara</h1>

                <p class="dst-lead">
                    Mengkaji potensi, karakteristik, daya tarik, aksesibilitas, amenitas,
                    tata kelola, pemasaran, dan daya saing destinasi wisata di seluruh Indonesia.
                </p>

                <div class="dst-hero-actions">
                    <a href="#proyek" class="dst-btn dst-btn--solid">
                        Jelajahi Proyek Riset
                        <iconify-icon icon="lucide:arrow-right" class="dst-btn-icon"></iconify-icon>
                    </a>
                    <a href="#fokus" class="dst-btn dst-btn--outline">Fokus Analisis</a>
                </div>
            </div>

            <figure class="dst-hero-media">
                <div class="dst-hero-frame">
                    <img src="{{ asset('img/nusantara.png') }}" alt="Destinasi wisata Nusantara" loading="eager">
                    <figcaption class="dst-frame-caption">
                        <strong>Kajian Destinasi Nusantara</strong>
                        <span>Repositori Kajian Lapangan PKPN</span>
                    </figcaption>
                </div>
            </figure>
        </div>
    </div>
</section>

{{-- ===================== PROYEK PENELITIAN ===================== --}}
<section class="dst-section dst-section--light" id="proyek">
    <div class="dst-container">
        <div class="dst-header dst-reveal">
            <h2 class="dst-heading">Proyek Penelitian Berjalan</h2>
            <p class="dst-sub">Studi aktif yang sedang dikembangkan tim PKPN bersama mitra akademik dan komunitas setempat.</p>
        </div>

        <div class="dst-box dst-reveal">
            <div class="dst-box-grid">
                <div class="dst-box-media">
                    <img src="{{ asset($projectMain['img']) }}" alt="{{ $projectMain['title'] }}" loading="lazy">
                </div>

                <div>
                    <div class="dst-status-row">
                        <span class="dst-status">{{ $projectMain['status'] }}</span>
                        <span class="dst-mini-meta" style="margin:0;">Laporan Interim</span>
                    </div>

                    <h3 class="dst-box-title dst-box-title--sm">{{ $projectMain['title'] }}</h3>
                    <p class="dst-box-text">{{ $projectMain['desc'] }}</p>

                    <div class="dst-spec">
                        @foreach ($projectMain['meta'] as $m)
                            <div class="dst-spec-row">
                                <iconify-icon icon="{{ $m['icon'] }}" class="dst-spec-icon"></iconify-icon>
                                <span><strong>{{ $loop->even ? 'Periode Studi' : 'Lokus Studi' }}</strong> — {{ $m['text'] }}</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="dst-progress-row">
                        <div class="dst-progress" aria-hidden="true">
                            <i data-fill="{{ $projectMain['fill'] }}"></i>
                        </div>
                        <span class="dst-progress-label">{{ $projectMain['fill'] }}%</span>
                    </div>

                    <a href="#" class="dst-btn dst-btn--solid">
                        {{ $projectMain['link'] }}
                        <iconify-icon icon="lucide:arrow-right" class="dst-btn-icon"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>

        <div class="dst-minis">
            @foreach ($projectSide as $i => $p)
                <article class="dst-mini dst-reveal d{{ $i + 1 }}">
                    <div class="dst-mini-thumb">
                        <img src="{{ asset($p['img']) }}" alt="{{ $p['title'] }}" loading="lazy">
                    </div>

                    <div class="dst-mini-body">
                        <p class="dst-mini-meta">{{ $p['tag'] }} · {{ $p['status'] }} · {{ $p['meta'] }}</p>
                        <h3 class="dst-mini-title">{{ $p['title'] }}</h3>
                        <p class="dst-mini-desc">{{ $p['desc'] }}</p>

                        <div class="dst-mini-foot">
                            <div class="dst-progress" aria-hidden="true">
                                <i data-fill="{{ $p['fill'] }}"></i>
                            </div>
                            <span class="dst-progress-label">{{ $p['fill'] }}%</span>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== FOKUS ANALISIS ===================== --}}
<section class="dst-section dst-section--white" id="fokus">
    <div class="dst-container">
        <div class="dst-header dst-reveal">
            <h2 class="dst-heading">Fokus Analisis Destinasi</h2>
            <p class="dst-sub">Enam dimensi kunci yang diukur secara rutin pada setiap kajian destinasi.</p>
        </div>

        <div class="dst-metrics">
            @foreach ($metrics as $i => $m)
                <article class="dst-metric dst-reveal d{{ ($i % 3) + 1 }}">
                    <span class="dst-metric-icon">
                        <iconify-icon icon="{{ $m['icon'] }}"></iconify-icon>
                    </span>

                    <p class="dst-metric-num">
                        <span data-count="{{ $m['to'] }}"
                              data-decimals="{{ $m['dec'] }}"
                              data-prefix="{{ $m['prefix'] ?? '' }}"
                              data-suffix="{{ $m['suffix'] }}">0</span>
                    </p>

                    <p class="dst-metric-title">{{ $m['label'] }}</p>
                    <p class="dst-metric-desc">{{ $m['desc'] }}</p>

                    <div class="dst-progress" aria-hidden="true">
                        <i data-fill="{{ $m['fill'] }}"></i>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== PARIWISATA BERKELANJUTAN ===================== --}}
<section class="dst-section dst-section--light" id="pariwisata">
    <div class="dst-container">
        <div class="dst-story">
            <figure class="dst-story-media dst-reveal">
                <img src="{{ asset('img/rumah.png') }}" alt="Pariwisata berkelanjutan" loading="lazy">
            </figure>

            <div class="dst-story-content dst-reveal d1">
                <h2 class="dst-story-title">Pariwisata Berkelanjutan</h2>
                <p class="dst-story-lead">
                    Mengkaji keseimbangan antara pertumbuhan ekonomi, kelestarian lingkungan, dan keberlanjutan
                    sosial-budaya dalam ekosistem pembangunan pariwisata modern.
                </p>

                <ul class="dst-list">
                    <li>
                        <iconify-icon icon="lucide:coins"></iconify-icon>
                        <span><strong>Impact Modeling</strong> — Proyeksi kontribusi sektor pariwisata terhadap pendapatan asli daerah.</span>
                    </li>
                    <li>
                        <iconify-icon icon="lucide:recycle"></iconify-icon>
                        <span><strong>Carbon Accounting</strong> — Penghitungan jejak karbon per kunjungan dengan standar internasional.</span>
                    </li>
                    <li>
                        <iconify-icon icon="lucide:handshake"></iconify-icon>
                        <span><strong>Community Equity</strong> — Distribusi manfaat dan insentif bagi masyarakat setempat secara transparan.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ===================== INDIKATOR KEBERLANJUTAN ===================== --}}
<section class="dst-section dst-section--white" id="indikator">
    <div class="dst-container">
        <div class="dst-header dst-reveal">
            <h2 class="dst-heading">Indikator Keberlanjutan</h2>
            <p class="dst-sub">Tiga pilar yang menjadi tolok ukur utama dalam setiap rekomendasi kebijakan.</p>
        </div>

        <div class="dst-pillars">
            @foreach ($pillars as $i => $pl)
                <article class="dst-pillar dst-reveal d{{ $i + 1 }}">
                    <span class="dst-pillar-icon">
                        <iconify-icon icon="{{ $pl['icon'] }}"></iconify-icon>
                    </span>
                    <h3 class="dst-pillar-title">{{ $pl['title'] }}</h3>
                    <p class="dst-pillar-desc">{{ $pl['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== BUDAYA ===================== --}}
<section class="dst-section dst-section--light" id="budaya">
    <div class="dst-container">
        <div class="dst-story dst-story-rev">
            <figure class="dst-story-media dst-reveal">
                <img src="{{ asset('img/kain.png') }}" alt="Seni tradisional" loading="lazy">
            </figure>

            <div class="dst-story-content dst-reveal d1">
                <h2 class="dst-story-title">Estetika &amp; Makna dalam Seni Tradisional</h2>
                <p class="dst-story-lead">
                    Eksplorasi mendalam mengenai simbolisme, narasi sejarah, dan fungsi sosial dari berbagai seni
                    kerajinan yang menjadi pilar kebudayaan lokal — sekaligus pengingat akan keseimbangan antara
                    nilai ekonomi pariwisata dengan kesakralan proses penciptaan karya.
                </p>

                <div class="dst-story-actions dst-hero-actions">
                    <a href="#koleksi" class="dst-btn dst-btn--solid">
                        Lihat Koleksi
                        <iconify-icon icon="lucide:arrow-down" class="dst-btn-icon"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== KOLEKSI KAJIAN LAPANGAN ===================== --}}
<section class="dst-section dst-section--white" id="koleksi">
    <div class="dst-container">
        <div class="dst-header dst-reveal">
            <h2 class="dst-heading">Koleksi Kajian Lapangan</h2>
            <p class="dst-sub">Dokumentasi lapangan yang telah menjadi rujukan komunitas dan pelaku industri pariwisata.</p>
        </div>

        <div class="dst-collection">
            @foreach ($collection as $i => $c)
                <a href="#" class="dst-collection-card dst-reveal d{{ $i + 1 }}">
                    <div class="dst-collection-media">
                        <img src="{{ asset($c['img']) }}" alt="{{ $c['title'] }}" loading="lazy">
                        <div class="dst-collection-overlay" aria-hidden="true"></div>
                    </div>
                    <div class="dst-collection-content">
                        <span class="dst-collection-badge">{{ $c['cat'] }}</span>
                        <span class="dst-collection-meta">{{ $c['meta'] }}</span>
                        <h3 class="dst-collection-title">{{ $c['title'] }}</h3>
                        <p class="dst-collection-desc">{{ $c['desc'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ===================== CTA PENUTUP ===================== --}}
<section class="dst-section dst-section--light">
    <div class="dst-container">
        <div class="dst-box dst-reveal">
            <div class="dst-cta-grid">
                <div class="dst-cta-text">
                    <h2>Punya Destinasi yang Ingin Dikaji?</h2>
                    <p>
                        Tim PKPN terbuka untuk riset bersama, pemetaan spasial, maupun asesmen keberlanjutan
                        di seluruh kawasan pariwisata Indonesia.
                    </p>
                </div>

                <div class="dst-cta-actions">
                    <a href="#call" class="dst-btn dst-btn--solid">
                        Ajukan Kerjasama
                        <iconify-icon icon="lucide:arrow-right" class="dst-btn-icon"></iconify-icon>
                    </a>
                    <a href="#proyek" class="dst-btn dst-btn--outline">Lihat Proyek</a>
                </div>
            </div>
        </div>
    </div>
</section>

<x-call/>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const fmt = (v, d) => Number(v).toLocaleString('id-ID', {
        minimumFractionDigits: d, maximumFractionDigits: d
    });

    /* ---------- Reveal on scroll (angka sama dengan situs: 16px / 0.5s) ---------- */
    const reveals = document.querySelectorAll('.dst-reveal');
    const delays = { d1: 60, d2: 120, d3: 180, d4: 240, d5: 300 };

    function reveal(el) {
        const offset = Object.entries(delays).find(([cls]) => el.classList.contains(cls));
        if (offset) el.style.transitionDelay = offset[1] + 'ms';
        el.classList.add('in');
        setTimeout(() => {
            el.style.transitionDelay = '0s';
            el.classList.remove('d1', 'd2', 'd3', 'd4', 'd5');
        }, offset ? 900 : 0);
    }

    if (!reduced && 'IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                reveal(entry.target);
                obs.unobserve(entry.target);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        reveals.forEach(el => io.observe(el));
    } else {
        reveals.forEach(el => {
            el.classList.add('in');
            el.classList.remove('d1', 'd2', 'd3', 'd4', 'd5');
        });
    }

    /* ---------- Counter (mendukung desimal & Top N; bukan data-count-value
       supaya tidak dobel dengan beranda.js) ---------- */
    function runCounter(node) {
        const to     = parseFloat(node.dataset.count || '0');
        const dec    = parseInt(node.dataset.decimals || '0', 10);
        const prefix = node.dataset.prefix || '';
        const suffix = node.dataset.suffix || '';

        if (reduced) { node.textContent = prefix + fmt(to, dec) + suffix; return; }

        const dur = 1200, t0 = performance.now();
        const step = t => {
            const p = Math.min((t - t0) / dur, 1);
            const e = 1 - (1 - p) * (1 - p);
            node.textContent = prefix + fmt(to * e, dec) + suffix;
            if (p < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    }

    const counters = document.querySelectorAll('[data-count]');

    if (!reduced && 'IntersectionObserver' in window) {
        const cio = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                runCounter(entry.target);
                obs.unobserve(entry.target);
            });
        }, { threshold: 0.5, rootMargin: '0px 0px -40px 0px' });
        counters.forEach(el => cio.observe(el));
    } else {
        counters.forEach(runCounter);
    }

    /* ---------- Progress meter data-fill ---------- */
    const fills = document.querySelectorAll('[data-fill]');

    if (!reduced && 'IntersectionObserver' in window) {
        const fio = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                const bar = entry.target;
                setTimeout(() => { bar.style.width = bar.dataset.fill + '%'; }, 200);
                fio.unobserve(bar);
            });
        }, { threshold: 0.5, rootMargin: '0px 0px -40px 0px' });
        fills.forEach(el => fio.observe(el));
    } else {
        fills.forEach(bar => { bar.style.width = bar.dataset.fill + '%'; });
    }
});
</script>

@endsection
