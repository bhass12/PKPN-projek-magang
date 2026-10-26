<section class="beranda3" id="call">
    <div class="form">
        <div class="form-box">
            <h2>Formulir Pengajuan</h2>

            @if (session('success'))
                <div style="margin:0 0 18px; padding:12px 16px; border:1px solid rgba(13,92,82,0.35); background:rgba(13,92,82,0.08); border-radius:10px; font-size:13.5px; color:#073D36;">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div style="margin:0 0 18px; padding:12px 16px; border:1px solid rgba(180,132,36,0.4); background:rgba(180,132,36,0.08); border-radius:10px; font-size:13.5px; color:#8F6716;">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div style="margin:0 0 18px; padding:12px 16px; border:1px solid rgba(220,38,38,0.35); background:rgba(220,38,38,0.06); border-radius:10px; font-size:13px; color:#991B1B;">
                    <strong style="display:block; margin-bottom:4px;">Periksa kembali isian berikut:</strong>
                    <ul style="margin:0; padding-left:18px;">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('kolaborasi.kirim') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap / Instansi</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama atau institusi Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Profesional</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="email@institusi.edu" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bidang">Pilih bidang kolaborasi</label>
                    <select id="bidang" name="bidang" required>
                        <option value="">Pilih bidang kolaborasi</option>
                        <option value="penelitian" @selected(old('bidang') === 'penelitian')>Penelitian</option>
                        <option value="pengabdian" @selected(old('bidang') === 'pengabdian')>Pengabdian Masyarakat</option>
                        <option value="pelatihan" @selected(old('bidang') === 'pelatihan')>Pelatihan &amp; Pendidikan</option>
                        <option value="lainnya" @selected(old('bidang') === 'lainnya')>Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="judul">Judul Proyek / Inisiatif</label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul') }}" placeholder="Misal: Studi Dampak Ekonomi Ekowisata di Bali" required>
                </div>

                <div class="form-group">
                    <label for="pesan">Deskripsi singkat</label>
                    <textarea id="pesan" name="pesan" placeholder="Jelaskan secara singkat tujuan dan ruang lingkup kolaborasi yang diusulkan..." required>{{ old('pesan') }}</textarea>
                </div>

                <button type="submit">Kirim Pengajuan</button>
            </form>

        </div>
    </div>
    <div class="call">
        <h2>Butuh bantuan?</h2>
        <p>Jika Anda memiliki pertanyaan spesifik sebelum mengajukan proposal formal, tim kemitraan kami siap membantu Anda.</p>
        <div class="contact">
            <iconify-icon class="icon2" icon="ic:outline-email"></iconify-icon>
            <h3>Email kemitraan</h3>
            <p>info@denpasarinstitute.com</p>
        </div>
        <div class="contact">
            <iconify-icon class="icon2" icon="material-symbols:call-outline"></iconify-icon>
            <h3>Telepon</h3>
            <p>087865309966</p>
        </div>
    </div>
</section>
