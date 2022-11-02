import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: 'localhost',
        port: 8080
    },
    plugins: [
        laravel({
            input: ['resources/css/bootstrap.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
