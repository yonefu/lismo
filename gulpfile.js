'use strict';
// defining required dependencies
var gulp = require('gulp');
// Importing all the Gulp-related packages we want to use
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const replace = require('gulp-replace');
const rename = require('gulp-rename');
var browserSync = require('browser-sync').create();



// File paths
var paths = {
    styles: {
        // By using styles/**/*.sass we're telling gulp to check all folders for any sass file
        src: "src/scss/**/*.scss",
        // Compiled files will end up in whichever folder it's found in (partials are not compiled)
        dest: "dist/css"
    },
    scripts: {
        // By using scripts/**/*.js we're telling gulp to check all folders for any sass file
        src: "src/js/**/*.js",
        // Compiled files will end up in whichever folder it's found in (partials are not compiled)
        dest: "dist/js"
    }
};

// Sass task: compiles the style.scss file into style.css
function style() {
    return gulp
        .src(paths.styles.src)
        // Initialize sourcemaps before compilation starts
        .pipe(sass())
        .on("error", sass.logError)
        // Use postcss with autoprefixer
        .pipe(postcss([autoprefixer('last 2 versions')]))
        // Now add/write the sourcemaps
        //.pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.styles.dest))


    // Compress the compiled file using cssnano
    .pipe(postcss([autoprefixer('last 2 versions'), cssnano()]))
        .pipe(rename({
            suffix: '.min'
        }))
        //.pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.styles.dest))

    // Add browsersync stream pipe after compilation
    //.pipe(browserSync.stream());
    .pipe(browserSync.reload({
        stream: true
    }))
}

// JS task: concatenates and uglifies JS files to script.js
function script() {
    return gulp
        .src(paths.scripts.src)
        .pipe(concat('script.js'))
        .pipe(gulp.dest(paths.scripts.dest))

    // Compress the compiled file using uglify
    .pipe(uglify())
        .pipe(concat('script.min.js'))
        .pipe(gulp.dest(paths.scripts.dest))

    .pipe(browserSync.reload({
        stream: true
    }))
}

// A simple task to reload the page
function reload() {
    browserSync.reload();
    done();
}

// Add browsersync initialization at the start of the watch task
function watch() {
    browserSync.init({
        // You can tell browserSync to use this directory and serve it as a mini-server
        // server: {
        //     proxy: "D:/wamp64/www/YIG-MI_PROJECTS/____PROTOTYPE/lismoa/",
        //     online: false,
        //     port: 2022
        // },
        //proxy: "http://localhost/YIG-MI_PROJECTS/____PROTOTYPE/lismoa/login"
    });
    gulp.watch(paths.styles.src, style);
    gulp.watch(paths.scripts.src, script);
    // We should tell gulp which files to watch to trigger the reload
    // This can be html or whatever you're using to develop your website
    // Note -- you can obviously add the path to the Paths object
    //gulp.watch("./*.php", reload);
    gulp.watch("./*.php").on('change', browserSync.reload);
    //gulp.watch(paths.scripts.src).on('change', browserSync.reload);
}


// Don't forget to expose the task!
exports.watch = watch

// Expose the task by exporting it
// This allows you to run it from the commandline using
// $ gulp style
exports.style = style;
exports.script = script;

/*
 * Specify if tasks run in series or parallel using `gulp.series` and `gulp.parallel`
 */
var build = gulp.parallel(style, script, watch);

/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', build);