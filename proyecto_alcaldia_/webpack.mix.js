const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
//
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

// Se ejecuta el comando: "npm run dev" para hacer mix de los .css y .js
// mix.styles([
//     'resources/login_v17/css/bootstrap.min.css',
//     'resources/login_v17/css/font-awesome.min.css',
//     'resources/login_v17/css/icon-font.min.css',
//     'resources/login_v17/css/animate.css',
//     'resources/login_v17/css/hamburgers.min.css',
//     'resources/login_v17/css/animsition.min.css',
//     'resources/login_v17/css/select2.min.css',
//     'resources/login_v17/css/daterangepicker.css',
//     'resources/login_v17/css/util.css',
//     'resources/login_v17/css/main.css'
// ],'public/css/app.css')
//     .scripts([
//         'resources/login_v17/js/jquery-3.2.1.min.js',
//         'resources/login_v17/js/animsition.min.js',
//         'resources/login_v17/js/popper.js',
//         'resources/login_v17/js/bootstrap.min.js',
//         'resources/login_v17/js/select2.min.js',
//         'resources/login_v17/js/moment.min.js',
//         'resources/login_v17/js/daterangepicker.js',
//         'resources/login_v17/js/countdowntime.js',
//         'resources/login_v17/js/main.js'
//     ],'public/js/app.js')
// ;
// Se ejecuta el comando: "npm run dev" para hacer mix de los .css y .js

mix.styles([
    'resources/soccer/css/bootstrap.min.css',
    'resources/soccer/css/c3.min.css',
    'resources/soccer/css/main.css',
    'resources/soccer/css/theme1.css',
],'public/css/soccer.css')
    .scripts([
        'resources/soccer/js/lib.vendor.bundle.js',
        'resources/soccer/js/apexcharts.bundle.js',
        'resources/soccer/js/counterup.bundle.js',
        'resources/soccer/js/knobjs.bundle.js',
        'resources/soccer/js/c3.bundle.js',
        'resources/soccer/js/core.js',
        'resources/soccer/js/project-index.js',
    ],'public/js/soccer.js')
;
