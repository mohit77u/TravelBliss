import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/sass/app.scss',
                'resources/assets/sass/style.scss',
                'resources/assets/js/app.js',
                'resources/assets/js/main.js',
                'resources/assets/js/slider.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            'node-fetch': 'isomorphic-fetch',
            $: 'jquery',
		    jquery: 'jquery',
        },
    },
});
