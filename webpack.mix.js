const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/css/bootstrap.css',
        'resources/assets/css/style.css',
        'resources/assets/css/custom.css',
        'resources/assets/css/colors.css',
        'resources/assets/css/jquery.countdown.css',
        'resources/assets/css/animations.min.css',
        'resources/assets/css/datepicker.css',
        'resources/assets/css/animate.min.css',
        'resources/assets/css/bootstrap-dropdownhover.min.css',
        'resources/assets/css/jquery-ui.css',
        'resources/assets/css/flexslider.css'
    ], 'public/assets/css/vendor.css')
    .scripts([
        'resources/assets/js/jquery-ui.min.js',
        'resources/assets/js/range-slider.js',
        'resources/assets/js/same-height.js',
        'resources/assets/js/bootstrap-datepicker.js',
        'resources/assets/js/jquery.main.js',
        'resources/assets/js/animations.min.js',
        'resources/assets/js/jquery.plugin.js',
        'resources/assets/js/jquery.countdown.js',
        'resources/assets/js/timber.master.min.js',
        'resources/assets/js/bootstrap-dropdownhover.min.js',
        'resources/assets/js/jquery.flexslider.js',
        'resources/assets/js/myscript.js'
        // 'resources/assets/js/jquery-ui.min.js',
        // 'resources/assets/js/jquery-ui.min.js',
        // 'resources/assets/js/jquery-ui.min.js',
        // 'resources/assets/js/jquery-ui.min.js',
        // 'resources/assets/js/jquery-ui.min.js',

    ], 'public/assets/js/vendor.js')
;
