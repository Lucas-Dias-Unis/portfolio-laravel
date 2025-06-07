// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      // Aponte apenas para os arquivos que realmente existem:
      input: [
        'resources/sass/app.scss',
        'resources/js/app.js'
      ],
      refresh: true,
    }),
  ],
});
