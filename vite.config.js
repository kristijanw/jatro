import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/animation.css', 
                'resources/js/app.js',
                'resources/js/alpinejs-ui.js',
                'resources/css/tailwindcss-forms.css',
                'resources/css/locomotive-scroll.css'
            ],
            refresh: true,
        }),
    ],
});
