const mix = require('laravel-mix');

const css = {
    src: 'scss/main.scss',
    dest: './css'
};

const gutenberg = {
    src: 'gutenberg.scss',
    dest: './css'
};

const js = {
    src: './js/app.js',
    dest: './js/min/site.min.js'
};




mix.js(js.src, js.dest)
    .sass(css.src, css.dest)
    .sass(gutenberg.src, gutenberg.dest)
    .options({
        processCssUrls: false,
    });


