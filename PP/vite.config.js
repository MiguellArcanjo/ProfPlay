import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/cadastro/style.scss',
                'resources/sass/login/style.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
