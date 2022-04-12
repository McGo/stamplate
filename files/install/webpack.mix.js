const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/site.js', 'public/js')
    .vue()
    .copy('node_moduldes/@glidejs/glide/dist', 'public/vendor/glidejs')
    .sass('resources/css/site.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./resources/tailwind.config.js') ],
    });
