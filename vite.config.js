import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/js/countdown.js',
        'resources/js/main.js',
        'resources/js/jquery-3.5.1.min.js',
        'resources/js/modernizr-3.5.0.min.js',
        'resources/js/wow.min.js',
      ],
      refresh: true,
    }),
  ],
});
