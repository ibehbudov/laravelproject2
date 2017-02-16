var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')

    .styles([
        'blog-post.css',
        'bootstrap.css',
        'font-awesome.css',
        'metisMenu.css',
        'sb-admin-2.css'
    ], './public/css/libs.css')

        .scripts([
            'bootstrap.js',
            'jquery.js',
            'metisMenu.js',
            'sb-admin-2.js'
        ], './public/js/libs.js')
});
