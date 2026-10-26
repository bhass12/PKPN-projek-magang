{{-- ============================================================
    Email: Pengajuan Kolaborasi — PKPN
    Seluruh styling inline karena Gmail menghapus <style>, <link>,
    dan class selector. Tabel dipakai agar tetap rapi di klien email
    yang merender layout kaku (Gmail web / aplikasi).
    ============================================================ --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Kolaborasi — PKPN</title>
</head>
<body style="margin:0; padding:0; background-color:#F8F9FA; font-family:'Segoe UI', Arial, Helvetica, sans-serif; color:#0B1B2B;">

    {{-- ---- Kertas luar ---- --}}
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#F8F9FA; padding:32px 12px;">
        <tr>
            <td align="center">

                {{-- ---- Kartu email ---- --}}
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%; background-color:#FFFFFF; border-radius:14px; overflow:hidden; box-shadow:0 4px 24px rgba(11,27,43,0.08);">

                    {{-- ---- Header navy ---- --}}
                    <tr>
                        <td style="background-color:#07131F; padding:26px 32px;" align="left">
                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td>
                                        <p style="margin:0; font-size:11px; font-weight:700; letter-spacing:0.14em; text-transform:uppercase; color:#8A99AD;">
                                            Pusat Kajian Pariwisata Nusantara
                                        </p>
                                        <h1 style="margin:8px 0 0; font-size:21px; font-weight:700; color:#FFFFFF; line-height:1.35;">
                                            Pengajuan Kolaborasi Baru
                                        </h1>
                                    </td>
                                    <td align="right" style="vertical-align:top;">
                                        <span style="display:inline-block; background-color:rgba(13,92,82,0.35); border:1px solid #0D5C52; color:#4ED3B8; font-size:11px; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; padding:6px 12px; border-radius:999px;">
                                            {{ strtoupper($data['bidang_label']) }}
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- ---- Ringkasan isian ---- --}}
                    <tr>
                        <td style="padding:28px 32px 8px;">

                            <p style="margin:0 0 20px; font-size:14px; line-height:1.6; color:#4A5568;">
                                Anda menerima satu pengajuan kolaborasi baru lengkap dengan detail isian berikut.
                                Menekan <em>Balas</em> pada email ini akan menjawab langsung ke pengaju.
                            </p>

                            {{-- Baris data: satu tabel per baris agar rapi di semua klien --}}
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid rgba(11,27,43,0.12); border-radius:10px; overflow:hidden;">
                                <tr>
                                    <td width="160" style="padding:12px 16px; background-color:#F8F9FA; border-bottom:1px solid rgba(11,27,43,0.08); font-size:12px; font-weight:700; letter-spacing:0.04em; text-transform:uppercase; color:#64748B;">
                                        Nama / Instansi
                                    </td>
                                    <td style="padding:12px 16px; border-bottom:1px solid rgba(11,27,43,0.08); font-size:14px; font-weight:600; color:#0B1B2B;">
                                        {{ $data['nama'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="160" style="padding:12px 16px; background-color:#F8F9FA; border-bottom:1px solid rgba(11,27,43,0.08); font-size:12px; font-weight:700; letter-spacing:0.04em; text-transform:uppercase; color:#64748B;">
                                        Email
                                    </td>
                                    <td style="padding:12px 16px; border-bottom:1px solid rgba(11,27,43,0.08); font-size:14px; color:#0D5C52; font-weight:600; word-break:break-all;">
                                        {{ $data['email'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="160" style="padding:12px 16px; background-color:#F8F9FA; border-bottom:1px solid rgba(11,27,43,0.08); font-size:12px; font-weight:700; letter-spacing:0.04em; text-transform:uppercase; color:#64748B;">
                                        Bidang Kolaborasi
                                    </td>
                                    <td style="padding:12px 16px; border-bottom:1px solid rgba(11,27,43,0.08); font-size:14px; font-weight:600; color:#0B1B2B;">
                                        {{ $data['bidang_label'] }}
                                        <span style="font-size:11px; color:#8A99AD;">&nbsp;(kode: {{ $data['bidang'] }})</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="160" style="padding:12px 16px; background-color:#F8F9FA; border-bottom:1px solid rgba(11,27,43,0.08); font-size:12px; font-weight:700; letter-spacing:0.04em; text-transform:uppercase; color:#64748B;">
                                        Judul Proyek
                                    </td>
                                    <td style="padding:12px 16px; border-bottom:1px solid rgba(11,27,43,0.08); font-size:14px; font-weight:600; color:#0B1B2B; line-height:1.5;">
                                        {{ $data['judul'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="160" valign="top" style="padding:12px 16px; background-color:#F8F9FA; font-size:12px; font-weight:700; letter-spacing:0.04em; text-transform:uppercase; color:#64748B;">
                                        Deskripsi
                                    </td>
                                    <td valign="top" style="padding:12px 16px; font-size:14px; line-height:1.7; color:#4A5568;">
                                        {{ $data['pesan'] }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- ---- Catatan moot ---- --}}
                    <tr>
                        <td style="padding:16px 32px 4px;">
                            <div style="border-left:3px solid #0D5C52; background-color:rgba(13,92,82,0.07); padding:12px 16px; border-radius:8px;">
                                <p style="margin:0; font-size:12.5px; line-height:1.6; color:#073D36;">
                                    <strong>Langkah tindak lanjut:</strong> koordinasi awal dengan pengaju
                                    melalui email <strong>{{ $data['email'] }}</strong>. Menekan <em>Balas</em>
                                    pada email ini sudah diarahkan ke alamat tersebut.
                                </p>
                            </div>
                        </td>
                    </tr>

                    {{-- ---- Dikirim otomatis ---- --}}
                    <tr>
                        <td align="center" style="padding:24px 32px 32px;">
                            <p style="margin:0; font-size:11.5px; line-height:1.6; color:#8A99AD;">
                                Email ini dikirim otomatis oleh formulir <strong>Pengajuan Kolaborasi</strong> PKPN<br>
                                pada {{ now()->timezone('Asia/Jakarta')->format('d M Y, H:i') }} WIB &middot; ID form: <code style="font-size:11px; color:#64748B;">kolaborasi.kirim</code>
                            </p>
                        </td>
                    </tr>

                </table>
                {{-- ---- /Kartu email ---- --}}

            </td>
        </tr>
    </table>
</body>
</html>
