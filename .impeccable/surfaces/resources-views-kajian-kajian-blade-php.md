---
version: 1
slug: "resources-views-kajian-kajian-blade-php"
primary_target: "resources/views/kajian/kajian.blade.php"
related_targets: ["resources/css/LP/kajian/kajian.css"]
---

## Kajian (katalog riset) — kajian.blade.php

- Surface: `resources/views/kajian/kajian.blade.php` + `resources/css/LP/kajian/kajian.css` (+ `resources/js/kajian.js`).
- Mode: Persuade-Read hybrid — katalog publikasi lembaga riset; pengunjung memahami kedalaman riset PKPN lalu membuka kajian.

## Direction contract

THESIS: Katalog kajian dibaca seperti daftar isi jurnal riset institusional — baris-baris tipografis dengan hairline rules, bukan grid kartu seragam bermuka foto; menolak cell-card hero-metric template.

OWN-WORLD: Kertas terang #F8F9FA + permukaan putih, tinta navy #0B1B2B, satu aksen teal #0D5C52, emas #B48424 khusus data (suffix angka, nomor metodologi, count tab), Epilogue display + Be Vietnam Pro body, hairline 1px, tanpa gradien/glass/glow/kicker-chip.

STORY: Pengunjung langsung paham ini repositori riset lembaga (masthead + judul dua-bobot), menelusuri katalog dengan pencarian instan + filter kategori, memahami protokol metodologi, lalu menuju konsultasi.

FIRST VIEWPORT: Masthead hairline atas-bawah (kiri nama lembaga, kanan repositori riset), judul Epilogue 700 dua baris clamp(42px,6.2vw,76px) — baris kedua berbobot 500 berwarna teal-gelap — lead maks 62ch, putih murni, masuk ke strip statistik paper dengan hairline.

FORM: TOC-entry rows (thumbnail 96px + meta uppercase + judul + kutipan + kolom data kanan), doodle index bar (search underline + tab teks bergaris bawah dengan count emas), featured dossier dua kolom dengan dl spec hairline, metodologi tiga kolom hairline-kiri, CTA panel navy double-rule dengan aksen emas atas.

FINISH: unreviewed and undocumented is unfinished; this build ends with the finish review, the verdict, DESIGN.md, and every shipping raster carrying its provenance
