const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/feedback/feedback.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .sourceMaps()

