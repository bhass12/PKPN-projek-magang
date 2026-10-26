<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('Beranda.index');
})->name('beranda');

Route::get('/publikasi', function () {
    return view('Beranda.publikasi');
});

route::get('/tentang', function () {
    return view('Tentang.tentang');
})->name('tentang');

route::get('/kajian', function () {
    return view('kajian.kajian');
})->name('kajian');

route::get('/destinasi', function () {
    return view('kajian.destinasi');
})->name('destinasi');

route::get('/program', function () {
    return view('Program.program');
})->name('program');

Route::get('/program/{slug}', function ($slug) {
    $map = [
     'strategi-ketahanan-destinasi-2025'=>['slug'=>'strategi-ketahanan-destinasi-2025','badge'=>'FLAGSHIP • 3 HARI','title'=>'Strategi Ketahanan Destinasi 2025','subtitle'=>'Program kepemimpinan intensif merancang kerangka adaptasi destinasi terhadap volatilitas global, perubahan iklim, dan pergeseran pasar pariwisata.','price'=>2750000,'price_text'=>'Rp 2.750.000','original'=>3500000,'quota'=>22,'quota_total'=>40,'date'=>'12 — 14 November 2024','time'=>'08:30 — 17:00 WIB','location'=>'The Aerotel, Jakarta Selatan','type'=>'Offline • Sertifikat BNSP','image'=>'https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&w=1400&q=80'],
     'metodologi-riset-kuantitatif'=>['slug'=>'metodologi-riset-kuantitatif','badge'=>'WORKSHOP','title'=>'Metodologi Riset Kuantitatif Destinasi','subtitle'=>'Pelatihan intensif pengolahan data statistik untuk pengambilan keputusan dan tata ruang pariwisata daerah.','price'=>750000,'price_text'=>'Rp 750.000','original'=>null,'quota'=>5,'quota_total'=>30,'date'=>'28 Okt 2024','time'=>'09:00 — 15:00 WIB','location'=>'Daring (Zoom)','type'=>'Online • Rekaman tersedia','image'=>'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1400&q=80'],
     'simposium-berkelanjutan'=>['slug'=>'simposium-berkelanjutan','badge'=>'KONFERENSI','title'=>'Simposium Pariwisata Berkelanjutan','subtitle'=>'Pertemuan pakar industri membahas tren keberlanjutan dan implementasi ESG.','price'=>0,'price_text'=>'Gratis','original'=>null,'quota'=>120,'quota_total'=>300,'date'=>'15 Nov 2024','time'=>'08:00 — 17:00 WIB','location'=>'Auditorium PKPN, Denpasar','type'=>'Offline • Gratis','image'=>'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&w=1400&q=80'],
     'dialog-retribusi'=>['slug'=>'dialog-retribusi','badge'=>'FORUM KAJIAN','title'=>'Dialog Kebijakan Retribusi Daerah','subtitle'=>'Diskusi terpumpun mengevaluasi dampak regulasi terhadap daya saing destinasi.','price'=>0,'price_text'=>'Undangan','original'=>null,'quota'=>0,'quota_total'=>50,'date'=>'05 Des 2024','time'=>'09:00 — 16:00 WIB','location'=>'Ruang Seminar PKPN','type'=>'Undangan','image'=>'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1400&q=80'],
     'seminar-digital'=>['slug'=>'seminar-digital','badge'=>'SEMINAR','title'=>'Seminar Pariwisata Digital','subtitle'=>'Membahas perkembangan teknologi digital dalam mendukung industri pariwisata Indonesia.','price'=>500000,'price_text'=>'Rp 500.000','original'=>null,'quota'=>10,'quota_total'=>100,'date'=>'12 Des 2024','time'=>'09:00 — 15:00 WIB','location'=>'Offline • Jakarta','type'=>'Offline','image'=>'https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1400&q=80'],
     'pelatihan-manajemen'=>['slug'=>'pelatihan-manajemen','badge'=>'PELATIHAN','title'=>'Pelatihan Manajemen Destinasi','subtitle'=>'Strategi pengelolaan destinasi wisata yang berkelanjutan.','price'=>0,'price_text'=>'Gratis','original'=>null,'quota'=>50,'quota_total'=>200,'date'=>'20 Des 2024','time'=>'09:00 — 15:00 WIB','location'=>'Online','type'=>'Online','image'=>'https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=1400&q=80'],
     'konferensi-pariwisata'=>['slug'=>'konferensi-pariwisata','badge'=>'KONFERENSI','title'=>'Konferensi Pariwisata','subtitle'=>'Forum diskusi nasional mengenai masa depan pariwisata Indonesia.','price'=>850000,'price_text'=>'Rp 850.000','original'=>null,'quota'=>30,'quota_total'=>150,'date'=>'28 Des 2024','time'=>'08:00 — 17:00 WIB','location'=>'Auditorium PKPN','type'=>'Offline','image'=>'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1400&q=80'],
    ];
    if(!isset($map[$slug])) abort(404);
    return view('Program.detail', ['program'=>$map[$slug]]);
})->name('program.detail');

route::get('/destinasi wisata', function () {
    return view('Destinasi wisata.provinsi');
})->name('destinasi wisata');

$lokasiHandler = function ($slug) {
    $provinsi = require resource_path('data/provinsi.php');
    if (!isset($provinsi[$slug])) {
        abort(404);
    }
    return view('Destinasi wisata.lokasi', [
        'data' => $provinsi[$slug]
    ]);
};

Route::get('/provinsi/{slug}', $lokasiHandler)->name('Destinasi Wisata.lokasi');
Route::get('/provinsi/detail/{slug}', $lokasiHandler)->name('Destinasi wisata.lokasi');

Route::get('/destinasi/side', function () {
    $directoryData = [];
    require resource_path('data/data.php');

    $initialCategory = request('category', 'hotel');
    if (!isset($directoryData[$initialCategory])) {
        $initialCategory = 'hotel';
    }
    $initialGroup = $directoryData[$initialCategory]['group'] ?? 'akomodasi';

    return view('Destinasi wisata.sidebar', compact('directoryData', 'initialCategory', 'initialGroup'));
})->name('directory');

Route::get('/destinasi/add-listing', function () {
    $directoryData = [];
    require resource_path('data/data.php');

    return view('Destinasi wisata.add-listing', [
        'directoryData' => $directoryData,
    ]);
})->name('listing.create');

Route::post('/destinasi/add-listing', [ContactController::class, 'listing'])
    ->name('listing.store')
    ->middleware('throttle:10,1');

/* ===================== FORMULIR PENGAJUAN KOLABORASI ===================== */
// Menampilkan halaman form (form yang sama juga ikut serta di halaman lain via <x-call/>)
Route::get('/kolaborasi', [ContactController::class, 'form'])->name('kolaborasi.form');

// Memproses POST formulir dan mengirim email ke Gmail (account kemitraan)
Route::post('/kolaborasi', [ContactController::class, 'kirim'])
    ->name('kolaborasi.kirim')
    ->middleware('throttle:10,1'); // cegah spam/pengiriman berlebihan

route::get('/form', function () {
    return view('components.call');
})->name('form');