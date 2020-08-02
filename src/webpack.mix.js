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
    module: {
        rules: [{
            test: /\.s(c|a)ss$/,
            use: [
                'vue-style-loader',
                'css-loader',
                {
                    loader: 'sass-loader',
                    // Requires sass-loader@^7.0.0
                    options: {
                        implementation: require('sass'),
                        fiber: require('fibers'),
                        indentedSyntax: true // optional
                    },
                    // Requires sass-loader@^8.0.0
                    options: {
                        implementation: require('sass'),
                        sassOptions: {
                            fiber: require('fibers'),
                            indentedSyntax: true // optional
                        },
                    },
                },
            ],
        }, ],
    }
});

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
            "@assets": path.resolve(
                __dirname,
                "resources/assets"
            ),
        },
    }
});

// mix.js('resources/assets/js/app.js', 'public/js')
//     .copy('resources/assets/img/', 'public/img/');

mix.js('resources/assets/js/app.js', 'public/js').eslint(options)
.copy('resources/assets/img/', 'public/img/');
