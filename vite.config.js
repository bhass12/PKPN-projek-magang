import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/LP/Destinasi wisata/sidebar.css', 'resources/css/LP/Destinasi wisata/add-listing.css', 'resources/js/sidebar.js', 'resources/css/LP/beranda.css','resources/js/beranda.js','resources/css/LP/tentang.css','resources/css/LP/kajian/kajian.css','resources/js/kajian.js','resources/css/LP/kajian/destinasi.css'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});