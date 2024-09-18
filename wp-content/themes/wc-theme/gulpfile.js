// Gulp.js configuration
'use strict';

const

    // ** change these two to yours **
    wordpress_project_name = 'wp-theme',
    theme_name = 'wc-theme',
    browserSyncProxy = 'http://localhost/wp-theme/',

    // source and build folders, ** change this to yours **
    dir = {
        src: 'src/',
        build: `../../vagrant-local/www/${wordpress_project_name}/wp-content/themes/${theme_name}/`
    },

    // Gulp and plugins
    {src, dest, series, parallel, watch} = require('gulp'),
    noop = require("gulp-noop"),
    newer = require('gulp-newer'),
    imagemin = require('gulp-imagemin'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    deporder = require('gulp-deporder'),
    concat = require('gulp-concat'),
    stripdebug = require('gulp-strip-debug'),
    uglify = require('gulp-uglify'),
    browserSync = require('browser-sync').create(),
    log = require('fancy-log')
;

// For BrowserSync
const reload = (cb) => {
    browserSync.reload();
    cb();
};