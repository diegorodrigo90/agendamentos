let mix = require('laravel-mix');
var path = require('path');

require('laravel-mix-eslint-config');

var options = {
    enforce: 'pre',
    test: /\.(js|vue)$/,
    exclude: /node_modules/,
    loader: 'eslint-loader',
    options: {
        fix: true,
        cache: false,
    }
};

mix.webpackConfig({
    resolve: {
        alias: {
            "@": path.resolve(
                __dirname,
                "resources/assets/js"
            ),
            "@sass": path.resolve(
                __dirname,
                "resources/assets/sass"
            ),
        }
    }
});

mix.js('resources/assets/js/app.js', 'public/js').eslint(options)
    .copy('resources/assets/img/', 'public/img/');
