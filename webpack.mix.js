const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/feedback/feedback.js', 'public/js')
    .js('resources/js/order/order.js', 'public/js')
    .js('resources/js/order/multi-page/multiPage', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .sourceMaps()

