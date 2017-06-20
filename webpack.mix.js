let mix = require('laravel-mix');

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

mix.styles(["resources/assets/css/style.css", "resources/assets/css/contact.css"],"public/css/contact.css")
   .styles(["resources/assets/css/style.css", "resources/assets/css/over.css"],"public/css/over.css")
   .styles(["resources/assets/css/style.css", "resources/assets/css/projecten.css"],"public/css/projecten.css")
   .styles(["resources/assets/css/style.css"],"public/css/home.css");

mix.scripts(["resources/assets/js/jquery.js","resources/assets/js/tw_bootstrap.min.js","resources/assets/js/scrollspy.js"],"public/js/projecten.js")
   .scripts("resources/assets/js/contact.js","public/js/contact.js")
   .js('resources/assets/js/app.js', 'public/js/app.js');

mix.disableNotifications();