const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss')

mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/app.js', 'public/js/admin/app.js')
