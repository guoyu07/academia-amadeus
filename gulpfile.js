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

// Gentelella vendors path : vendor/bower_components/gentelella/vendors

elixir(function(mix) {
    
    /********************/
    /* Copy Stylesheets */
    /********************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');

    // Font awesome
    mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css');

    // Gentelella
    mix.copy('vendor/bower_components/gentelella/build/css/custom.min.css', 'public/css/gentelella.min.css');

    // PNotify
    mix.copy('vendor/bower_components/gentelella/vendors/pnotify/dist/pnotify.css', 'public/css/pnotify.min.css');
    mix.copy('vendor/bower_components/gentelella/vendors/pnotify/dist/pnotify.buttons.css', 'public/css/pnotify.buttons.min.css');
    mix.copy('vendor/bower_components/gentelella/vendors/pnotify/dist/pnotify.nonblock.css', 'public/css/pnotify.nonblock.min.css');


    /****************/
    /* Copy Scripts */
    /****************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');

    // jQuery
    mix.copy('vendor/bower_components/gentelella/vendors/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

    // Gentelella
    mix.copy('vendor/bower_components/gentelella/build/js/custom.js', 'public/js/gentelella.min.js');

    // PNotify
    mix.copy('vendor/bower_components/gentelella/vendors/pnotify/dist/pnotify.js', 'public/js/pnotify.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/pnotify/dist/pnotify.buttons.js', 'public/js/pnotify.buttons.min.js');
    mix.copy('vendor/bower_components/gentelella/vendors/pnotify/dist/pnotify.nonblock.js', 'public/js/pnotify.nonblock.min.js');

    /**************/
    /* Copy Fonts */
    /**************/

    // Bootstrap
    mix.copy('vendor/bower_components/gentelella/vendors/bootstrap/fonts/', 'public/fonts');

    // Font awesome
    mix.copy('vendor/bower_components/gentelella/vendors/font-awesome/fonts/', 'public/fonts');
});
