<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PengajuanKolaborasiMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Semua data tervalidasi yang akan tampil di template email.
     * keys: nama, email, bidang, bidang_label, judul, pesan
     */
    public function __construct(public array $data)
    {
        //
    }

    /**
     * Amplop email: pengirim + balasan-pengajannya.
     * Dengan replyTo, menekan "Balas" di Gmail akan otomatis
     * menyasar email pengaju (kolom Data Pengaju).
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '[PKPN] Pengajuan Kolaborasi — ' . $this->data['judul'],
            replyTo: [
                new Address($this->data['email'], $this->data['nama']),
            ],
        );
    }

    /**
     * Konten email: template Blade dengan styling inline agar
     * tampil rapi di Gmail (Gmail menghapus CSS eksternal/kelas).
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.pengajuan-kolaborasi',
            with: ['data' => $this->data],
        );
    }

    /**
     * Tidak ada attachment dalam formulir pengajuan.
     */
    public function attachments(): array
    {
        return [];
    }
}
