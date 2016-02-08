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
    mix.styles(["style.css", "contact.css"],"public/css/contact.css")
        .styles(["style.css", "over.css"],"public/css/over.css")
        .styles(["style.css", "projecten.css"],"public/css/projecten.css")
        .styles(["style.css"],"public/css/home.css");

    mix.scripts(["jquery.js","bootstrap.min.js","scrollspy.js"],"public/js/projecten.js")
        .scripts("contact.js");
});
