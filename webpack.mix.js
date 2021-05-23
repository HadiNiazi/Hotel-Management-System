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
    .sass('resources/sass/app.scss', 'public/css');


       //    Publisher home theme assets
mix.styles([
    'resources/assets/publisher/css/bootstrap.css',
    'resources/assets/publisher/css/appwork.css',
    'resources/assets/publisher/css/theme-corporate.css',
    'resources/assets/publisher/css/colors.css',
    'resources/assets/publisher/css/uikit.css',
    'resources/assets/publisher/css/demo.css',
    'resources/assets/publisher/css/perfect-scrollbar.css'

], 'public/css/publisher/index.css');


mix.scripts([
    'resources/assets/publisher/js/pace.js',
    'resources/assets/publisher/js/material-ripple.js',
    'resources/assets/publisher/js/layout-helpers.js',
    'resources/assets/publisher/js/polyfills.js',
    'resources/assets/publisher/js/popper.js',
    'resources/assets/publisher/js/bootstrap.js',
    'resources/assets/publisher/js/sidenav.js',
    'resources/assets/publisher/js/perfect-scrollbar.js',,
    'resources/assets/publisher/js/demo.js',

], 'public/js/publisher/index.js');


//admin assets

mix.styles([
    'resources/assets/admin/css/all.min.css',
    'resources/assets/admin/css/tempusdominus-bootstrap-4.min.css',
    'resources/assets/admin/css/icheck-bootstrap.min.css',
    'resources/assets/admin/css/adminlte.min.css',
    'resources/assets/admin/css/OverlayScrollbars.min.css',
], 'public/css/admin/dashboard.css');

mix.scripts([
    'resources/assets/admin/js/jquery.min.js',
    'resources/assets/admin/js/jquery-ui.min.js',
    'resources/assets/admin/js/bootstrap.bundle.min.js',
    'resources/assets/admin/js/moment.min.js',
    'resources/assets/admin/js/tempusdominus-bootstrap-4.min.js',
    'resources/assets/admin/js/jquery.overlayScrollbars.min.js',
    'resources/assets/admin/js/adminlte.js',
    'resources/assets/admin/js/demo.js',

], 'public/js/admin/dashboard.js');

