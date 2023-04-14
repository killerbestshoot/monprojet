const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .setPublicPath('public');

mix.options({
    hmrOptions: {
        host: 'localhost',
        port: 8080
    },
    processCssUrls: false,
    postCss: []
});

mix.webpackConfig({
    module: {
        rules: []
    },
    resolve: {
        alias: {
            '@': path.resolve('resources/js')
        }
    }
});

mix.browserSync({
    proxy: 'localhost:8000',
    open: false,
    notify: false,
    files: [
        'app/**/*.php',
        'resources/views/**/*.php',
        'resources/js/**/*.js',
        'resources/sass/**/*.scss'
    ]
});

mix.disableSuccessNotifications();

if (mix.inProduction()) {
    mix.version();
}
