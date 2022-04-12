const mix = require("laravel-mix");

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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

mix.styles(
    [
        "public/f/css/bootstrap.min.css",
        "public/f/css/all.min.css",
        "public/f/css/simple-line-icons.css",
        "public/f/css/slick.css",
        "public/f/css/animate.css",
        "public/f/css/magnific-popup.css",
        "public/f/plugin/fontawesome/css/all.min.css",
    ],
    "public/f/css/fstyle.css"
).version('20220413');

mix.styles(
    ["public/f/css/style.css", "public/f/css/self.css"],
    "public/f/css/fcustomstyle.css"
).version('20220413');

mix.scripts(
    [
        "public/f/js/jquery-1.12.3.min.js",
        "public/f/js/jquery.easing.min.js",
        "public/f/js/jquery.waypoints.min.js",
        "public/f/js/jquery.counterup.min.js",
        "public/f/js/popper.min.js",
        "public/f/js/bootstrap.min.js",
        "public/f/js/isotope.pkgd.min.js",
        "public/f/js/infinite-scroll.min.js",
        "public/f/js/imagesloaded.pkgd.min.js",
        "public/f/js/slick.min.js",
        "public/f/js/contact.js",
        "public/f/js/validator.js",
        "public/f/js/wow.min.js",
        "public/f/js/morphext.min.js",
        "public/f/js/parallax.min.js",
        "public/f/js/jquery.magnific-popup.min.js",
    ],
    "public/f/js/fscript.js"
).version('20220413');
mix.scripts(
    ["public/f/js/custom.js", "public/f/js/self.js"],
    "public/f/js/fcustomscript.js"
).version('20220413');
