<footer class="footer-modern">
    <div class="footer-container">
        <!-- Logo & Brand -->
        <div class="footer-column footer-brand">
            <div class="footer-logo-box">
                <img src="{{ asset('img/logoft.png') }}" alt="PKPN Logo" class="footer-logo">
            </div>
            <p class="footer-brand-text">Pusat Kajian Pariwisata Nusantara menghasilkan wawasan strategis untuk ekosistem pariwisata yang resilien dan berkelanjutan.</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-column">
            <h4 class="footer-heading">Menu Cepat</h4>
            <ul class="footer-links">
                <li><a href="/">Beranda</a></li>
                <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
                <li><a href="{{ route('kajian') }}">Kajian</a></li>
                <li><a href="{{ route('destinasi wisata') }}">Publikasi</a></li>
                <li><a href="{{ route('program') }}">Program</a></li>
            </ul>
        </div>

        <!-- Research Areas -->
        <div class="footer-column">
            <h4 class="footer-heading">Area Kajian</h4>
            <ul class="footer-links">
                <li><a href="/destinasi">Kajian Destinasi</a></li>
                <li><a href="/destinasi#pariwisata">Pariwisata Berkelanjutan</a></li>
                <li><a href="/destinasi#budaya">Warisan Budaya</a></li>
                <li><a href="/">Analisis Data</a></li>
                <li><a href="/">Laporan Riset</a></li>
            </ul>
        </div>

        <!-- Contact & Newsletter -->
        <div class="footer-column footer-contact">
            <h4 class="footer-heading">Hubungi Kami</h4>
            <div class="footer-contact-box">
                <p class="contact-item"><iconify-icon icon="uil:map-pin"></iconify-icon>Jln. Ganetri IV No. 1 DPS 80237 Bali</p>
                <p class="contact-item"><iconify-icon icon="uil:phone"></iconify-icon>087865309966</p>
                <p class="contact-item"><iconify-icon icon="uil:envelope"></iconify-icon>info@denpasarinstitute.com</p>
                <p class="contact-item"><iconify-icon icon="uil:globe"></iconify-icon>www.denpasarinstitute.com</p>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <p class="footer-copyright">&copy; 2023-2026 Pusat Kajian Pariwisata Nusantara. All rights reserved.</p>
        <div class="footer-links-bottom">
            <a href="#">Kebijakan Privasi</a>
            <span class="divider">•</span>
            <a href="#">Syarat & Ketentuan</a>
            <span class="divider">•</span>
            <a href="#">Sitemap</a>
        </div>
    </div>
</footer>

<style>
/* === FOOTER - PKPN (minimal dark editorial) === */
.footer-modern {
    --footer-accent: #2DD4BF;
    background: #0B1B2B;
    color: rgba(255, 255, 255, 0.72);
    padding: 96px 0 0;
    position: relative;
    font-family: 'Be Vietnam Pro', system-ui, -apple-system, sans-serif;
}

/* Single authored scroll entrance */
.footer-modern {
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1), transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
}

.footer-modern.is-hidden {
    opacity: 0;
    transform: translateY(24px);
}

.footer-modern.is-hidden.footer-visible {
    opacity: 1;
    transform: translateY(0);
}

.footer-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 64px;
    margin-bottom: 80px;
}

.footer-column {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.footer-brand {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.footer-logo-box {
    width: fit-content;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 12px;
    padding: 14px 18px;
    transition: border-color 0.35s ease, background 0.35s ease;
}

.footer-logo-box:hover {
    border-color: rgba(45, 212, 191, 0.55);
    background: rgba(45, 212, 191, 0.06);
}

.footer-logo {
    height: 44px;
    width: auto;
}

.footer-brand-text {
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.72);
    font-weight: 400;
    max-width: 46ch;
}

.footer-social {
    display: flex;
    gap: 12px;
}

.social-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 255, 255, 0.14);
    border-radius: 50%;
    color: rgba(255, 255, 255, 0.75);
    font-size: 16px;
    transition: color 0.35s ease, border-color 0.35s ease, background 0.35s ease, transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.social-icon:hover {
    color: #ffffff;
    border-color: rgba(45, 212, 191, 0.6);
    background: rgba(45, 212, 191, 0.08);
    transform: translateY(-2px);
}

.footer-heading {
    font-family: 'Epilogue', sans-serif;
    font-size: 12px;
    font-weight: 700;
    color: #ffffff;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    line-height: 1.4;
    position: relative;
    padding-bottom: 12px;
}

.footer-heading::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 28px;
    height: 2px;
    background: var(--footer-accent);
    border-radius: 2px;
}

.footer-links {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin: 0;
    padding: 0;
}

.footer-links a {
    font-family: 'Be Vietnam Pro', sans-serif;
    font-size: 15px;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.66);
    text-decoration: none;
    position: relative;
    padding-bottom: 4px;
    transition: color 0.35s ease;
}

.footer-links a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 0;
    background: var(--footer-accent);
    border-radius: 2px;
    transition: width 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}

.footer-links a:hover {
    color: #ffffff;
}

.footer-links a:hover::after {
    width: 100%;
}

.footer-contact-box {
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.contact-item {
    font-family: 'Be Vietnam Pro', sans-serif;
    font-size: 14px;
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.66);
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.contact-item iconify-icon {
    font-size: 15px;
    color: var(--footer-accent);
    flex-shrink: 0;
    margin-top: 3px;
}

.footer-newsletter {
    padding: 72px 24px 88px;
    text-align: center;
}

.newsletter-content h3 {
    font-family: 'Epilogue', sans-serif;
    font-size: 24px;
    font-weight: 700;
    line-height: 1.25;
    color: #ffffff;
    letter-spacing: -0.01em;
    margin-bottom: 12px;
}

.newsletter-content p {
    font-family: 'Be Vietnam Pro', sans-serif;
    font-size: 14px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.65);
    max-width: 46ch;
    margin: 0 auto 32px;
}

.newsletter-form {
    display: flex;
    gap: 12px;
    max-width: 440px;
    margin: 0 auto;
}

.newsletter-form input {
    flex: 1;
    min-width: 0;
    padding: 14px 20px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.14);
    border-radius: 9999px;
    color: #ffffff;
    font-family: 'Be Vietnam Pro', sans-serif;
    font-size: 14px;
    transition: border-color 0.35s ease, box-shadow 0.35s ease, background 0.35s ease;
}

.newsletter-form input::placeholder {
    color: rgba(255, 255, 255, 0.6);
    font-weight: 400;
}

.newsletter-form input:focus {
    outline: none;
    background: rgba(255, 255, 255, 0.06);
    border-color: var(--footer-accent);
    box-shadow: 0 0 0 4px rgba(45, 212, 191, 0.12);
}

.newsletter-btn {
    padding: 14px 30px;
    background: #0D5C52;
    color: #ffffff;
    border: none;
    border-radius: 9999px;
    font-family: 'Epilogue', sans-serif;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 0.04em;
    cursor: pointer;
    white-space: nowrap;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, background 0.3s ease;
}

.newsletter-btn:hover {
    background: #0A4A42;
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(13, 92, 82, 0.35);
}

.newsletter-btn:active {
    transform: translateY(0);
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    padding: 28px 0 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 16px;
}

.footer-copyright {
    font-family: 'Be Vietnam Pro', sans-serif;
    font-size: 13px;
    color: rgba(255, 255, 255, 0.55);
}

.footer-links-bottom {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}

.footer-links-bottom a {
    font-family: 'Be Vietnam Pro', sans-serif;
    font-size: 13px;
    color: rgba(255, 255, 255, 0.55);
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-links-bottom a:hover {
    color: #ffffff;
}

.divider {
    color: rgba(255, 255, 255, 0.25);
    font-weight: 300;
}

/* Keyboard focus */
.footer-modern a:focus-visible,
.newsletter-btn:focus-visible,
.newsletter-form input:focus-visible {
    outline: 2px solid rgba(45, 212, 191, 0.7);
    outline-offset: 3px;
}

/* Responsive */
@media (max-width: 1024px) {
    .footer-container {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 48px;
    }
}

@media (max-width: 768px) {
    .footer-modern {
        padding: 72px 0 0;
    }

    .footer-container {
        grid-template-columns: 1fr;
        gap: 40px;
        margin-bottom: 64px;
    }

    .footer-newsletter {
        padding: 56px 20px 72px;
    }

    .newsletter-form {
        flex-direction: column;
        align-items: stretch;
    }

    .newsletter-btn {
        width: 100%;
    }

    .footer-bottom {
        flex-direction: column;
        text-align: center;
    }
}

@media (prefers-reduced-motion: reduce) {
    .footer-modern {
        transition: none;
    }

    .footer-modern.is-hidden {
        opacity: 1;
        transform: none;
    }
}
</style>
