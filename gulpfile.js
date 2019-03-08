var locals = require("./app/data/locals.json");
var elixir = require('laravel-elixir'),
    connectPHP = require('gulp-connect-php'),
    BrowserSync = require('laravel-elixir-browsersync2');

elixir.config.css.autoprefix = {
    enabled: true,
    options: {
        browsers: ['> 5%'],
        cascade: false
    }
};

elixir(function(mix) {

    if (!elixir.config.production) {
        connectPHP.server({
            base: './',
            hostname: '0.0.0.0',
            port: 8000,
            keepalive: true
        });
        BrowserSync.init({
            proxy: {
                target: 'localhost:8000',
                ws: true,
                open: true,
                watchTask: true
            },
            port: 3000,
            logConnections: false,
            reloadOnRestart: true,
            notify: true,
            files: ["./resources", "./resources/**/*.*"]
        });
        mix.BrowserSync();
    }

    mix.webpack(
        'main.js',
        './dist/js/main.js'
    );
    mix.sass('main.scss', 'dist/css');
});
