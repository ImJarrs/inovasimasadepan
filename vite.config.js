import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/recom.css',
                'resources/css/selfq.css',
                'resources/css/splus.css',
            ],
            refresh: true,
        }),
    ],
    build: {
        // Mengaktifkan minifikasi (Default: 'esbuild' - sangat cepat)
        minify: 'esbuild',
        
        // Pengaturan bundling & pemisahan chunk
        rollupOptions: {
            output: {
                // Menggabungkan vendor JS (misal: Swiper, Bootstrap) ke file tersendiri
                manualChunks(id) {
                    if (id.includes('node_modules')) {
                        return 'vendor';
                    }
                },
                // Penamaan file hasil kompilasi agar rapi di folder public/build
                entryFileNames: 'assets/[name]-[hash].js',
                chunkFileNames: 'assets/[name]-[hash].js',
                assetFileNames: 'assets/[name]-[hash].[ext]',
            },
        },
    },
});