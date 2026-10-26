<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PengajuanKolaborasiMail;

class ContactController extends Controller
{
    /**
     * Alamat Gmail tujuan penerima pengajuan kolaborasi.
     * Dibaca dari .env agar mudah diganti tanpa ubah kode.
     */
    protected string $tujuan = 'bhaskarajaa@gmail.com';

    /**
     * Peta nilai <option> bidang -> label yang mudah dibaca di email.
     */
    public const BIDANG_LABEL = [
        'penelitian' => 'Penelitian',
        'pengabdian' => 'Pengabdian Masyarakat',
        'pelatihan'  => 'Pelatihan & Pendidikan',
        'lainnya'    => 'Lainnya',
    ];

    /**
     * Menampilkan formulir pengajuan kolaborasi.
     * Bisa juga diakses dari embed <x-call/> di halaman lain (kajian, destinasi, dst).
     */
    public function form()
    {
        return view('kolaborasi.form');
    }

    /**
     * Memproses POST formulir, memvalidasi seluruh field,
     * lalu mengirimkannya sebagai email ke Gmail tujuan.
     */
    public function kirim(Request $request)
    {
        // ---------- 1. Validasi semua field ----------
        $validated = $request->validate([
            'nama'  => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'bidang' => ['required', 'string', 'in:' . implode(',', array_keys(self::BIDANG_LABEL))],
            'judul' => ['required', 'string', 'max:200'],
            'pesan' => ['required', 'string', 'max:2000'],
        ], [
            'nama.required'    => 'Nama lengkap / instansi wajib diisi.',
            'email.required'   => 'Email profesional wajib diisi.',
            'email.email'      => 'Format email belum benar, contoh: nama@institusi.edu.',
            'bidang.required'  => 'Silakan pilih bidang kolaborasi.',
            'bidang.in'        => 'Bidang kolaborasi yang dipilih tidak tersedia.',
            'judul.required'   => 'Judul proyek / inisiatif wajib diisi.',
            'pesan.required'   => 'Deskripsi singkat wajib diisi.',
            'pesan.max'        => 'Deskripsi singkat maksimal 2000 karakter.',
        ]);

        // Lengkapi data untuk template email
        $data             = $validated;
        $data['bidang_label'] = self::BIDANG_LABEL[$validated['bidang']];

        // ---------- 2. Kirim email ke Gmail ----------
        try {
            Mail::to($this->tujuan)->send(
                new PengajuanKolaborasiMail($data)
            );
        } catch (\Throwable $e) {
            report($e); // berhenti: catat ke storage/logs/laravel.log

            return back()
                ->withInput()
                ->with('error', 'Pengajuan gagal dikirim. Silakan coba lagi atau hubungi kemitraan@institusi.edu.');
        }

        // ---------- 3. Kembali ke form dengan pesan sukses ----------
        return back()->with('success', 'Pengajuan kolaborasi berhasil dikirim. Tim PKPN akan menghubungi Anda melalui email.');
    }
    public function listing(Request $request)
    {
        $directoryData = [];
        require resource_path('data/data.php');

        $validated = $request->validate([
            'perusahaan' => ['required', 'string', 'max:150'],
            'kategori' => ['required', 'string', 'in:' . implode(',', array_keys($directoryData))],
            'lokasi' => ['required', 'string', 'max:200'],
            'telepon' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:150'],
            'website' => ['nullable', 'url', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:500'],
            'foto' => ['nullable', 'array', 'max:5'],
            'foto.*' => ['image', 'max:5120'],
        ], [
            'perusahaan.required' => 'Nama perusahaan atau usaha wajib diisi.',
            'perusahaan.max' => 'Nama perusahaan atau usaha maksimal 150 karakter.',
            'kategori.required' => 'Silakan pilih kategori listing.',
            'kategori.in' => 'Kategori yang dipilih tidak tersedia.',
            'lokasi.required' => 'Lokasi atau alamat wajib diisi.',
            'telepon.required' => 'Nomor telepon wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email belum benar.',
            'website.url' => 'Format website harus berupa URL lengkap, misalnya https://contoh.com.',
            'deskripsi.required' => 'Deskripsi singkat wajib diisi.',
            'deskripsi.max' => 'Deskripsi maksimal 500 karakter.',
            'foto.max' => 'Maksimal 5 foto dapat dilampirkan.',
            'foto.*.image' => 'Lampiran harus berupa file gambar.',
            'foto.*.max' => 'Ukuran setiap foto maksimal 5 MB.',
        ]);

        $category = preg_replace('/ Directory$/', '', $directoryData[$validated['kategori']]['title']);
        $photos = $validated['foto'] ?? [];
        $body = implode("\n", [
            'Pengajuan listing baru',
            '',
            'Nama perusahaan/usaha: ' . $validated['perusahaan'],
            'Kategori: ' . $category,
            'Lokasi/alamat: ' . $validated['lokasi'],
            'Nomor telepon: ' . $validated['telepon'],
            'Email: ' . $validated['email'],
            'Website: ' . ($validated['website'] ?: '-'),
            '',
            'Deskripsi:',
            $validated['deskripsi'],
            '',
            'Jumlah foto terlampir: ' . count($photos),
        ]);

        try {
            Mail::raw($body, function ($message) use ($validated, $photos) {
                $message
                    ->to($this->tujuan)
                    ->replyTo($validated['email'], $validated['perusahaan'])
                    ->subject('Pengajuan listing baru: ' . $validated['perusahaan']);

                foreach ($photos as $photo) {
                    $message->attach($photo->getRealPath(), [
                        'as' => $photo->getClientOriginalName(),
                        'mime' => $photo->getMimeType(),
                    ]);
                }
            });
        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with('error', 'Pengajuan gagal dikirim. Silakan coba lagi atau hubungi tim PKPN.');
        }

        return back()->with('success', 'Pengajuan listing berhasil dikirim. Tim PKPN akan meninjau data Anda.');
    }
}
