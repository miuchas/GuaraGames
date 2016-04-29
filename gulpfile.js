var elixir = require('laravel-elixir');
var bowerDir = './resources/assets/js/';
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
    mix.sass('app.scss');
    mix.copy('node_modules/bootstrap-sass/assets/fonts/', 'public/fonts');

    mix.scripts([
      'jquery.min.js',
      'bootstrap.min.js',
      'material.min.js',
    ],'public/scripts/vendor.js', bowerDir);

});
