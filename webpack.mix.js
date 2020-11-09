const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')


// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for the application as well as bundling up all the JS files.
//  |
//  */



mix
    .js('resources/midone/js/app.js', 'public/midone/dist/js')
    //     // .js('resources/midone/js/ckeditor.js', 'public/midone/dist/js')
    .sass('resources/midone/sass/app.scss', 'public/midone/dist/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .autoload({
        'cash-dom': ['$']
    })

// .webpackConfig({
//     module: {
//         rules: [{
//                 test: CKERegex.svg,
//                 use: ['raw-loader']
//             },
//             {
//                 test: CKERegex.css,
//                 use: [{
//                         loader: 'style-loader',
//                         options: {
//                             injectType: 'singletonStyleTag',
//                             attributes: {
//                                 'data-cke': true
//                             }
//                         }
//                     },
//                     {
//                         loader: 'postcss-loader',
//                         options: CKEStyles.getPostCssConfig({
//                             themeImporter: {
//                                 themePath: require.resolve('@ckeditor/ckeditor5-theme-lark')
//                             },
//                             minify: true
//                         })
//                     }
//                 ]
//             }
//         ]
//     }
// })

// .copyDirectory('resources/midone/json', 'midone/dist/json')
// .copyDirectory('resources/midone/fonts', 'midone/dist/fonts')
// .copyDirectory('resources/midone/images', 'midone/dist/images')

.copyDirectory(
        'resources/plugins',
        'public/plugins')
    .combine([
        'resources/main/css/css-bootstrap.min.css',
        'resources/main/css/css-meanmenu.css',
        'resources/main/css/css-boxicons.min.css',
        'resources/main/css/fonts-flaticon.css',
        'resources/main/css/css-magnific-popup.css',
        'resources/main/css/css-odometer.css',
        'resources/main/css/css-owl.carousel.min.css',
        'resources/main/css/css-owl.theme.default.min.css',
        'resources/main/css/css-animate.min.css',
        'resources/main/css/css-style.css',
        'resources/main/css/css-responsive.css',
    ], 'public/css/main.css')

.combine([
        "resources/main/js/js-jquery-3.5.1.min.js",
        "resources/main/js/js-popper.min.js",
        "resources/main/js/js-bootstrap.min.js",
        "resources/main/js/js-form-validator.min.js",
        "resources/main/js/js-contact-form-script.js",
        "resources/main/js/js-jquery.ajaxchimp.min.js",
        "resources/main/js/js-jquery.meanmenu.js",
        "resources/main/js/js-jquery.magnific-popup.min.js",
        "resources/main/js/js-odometer.min.js",
        "resources/main/js/js-jquery.appear.js",
        "resources/main/js/js-owl.carousel.min.js",
        "resources/main/js/js-thumb-slide.js",
        "resources/main/js/js-wow.min.js",
        "resources/main/js/js-custom.js"
    ], 'public/js/main.js')
    .combine([
        'resources/js/alpine.js',
        'resources/js/init-alpine.js'
    ], 'public/js/alpine.js')
    .copyDirectory('resources/main/images', 'public/images')
    .copyDirectory('resources/main/fonts', 'public/fonts')