const gulp    = require('gulp');
const postcss = require('gulp-postcss');
const sass    = require('gulp-sass')(require('sass'));
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
var rename = require("gulp-rename");
var reload = browserSync.reload;

gulp.task('browser-sync', function() {

    // initializes the browserSync
    browserSync.init( {
        proxy: "http://localhost/tour_web/wordpress/",
    });

    gulp.watch('./assets/scss/*.scss', gulp.series('styles'))
    gulp.watch('./assets/js/*.js', gulp.series('minifyJS'))
    gulp.watch('./*.php').on('change', reload);
});

gulp.task('styles', function(){
    let plugins = [
        cssnano()
    ];
    return gulp.src('./assets/scss/*.scss') // locations of scss files
        .pipe(sass()) // sass compiler
        .pipe(postcss(plugins)) // code gets minified 
        .pipe(rename("main.min.css")) // renaming folders
        .pipe(gulp.dest('./build/css')) // css files to be compiled
        .pipe(browserSync.stream()); // stream changes to all browser
});

gulp.task('images', function() {
    return gulp.src('./assets/img/*.svg')
        .pipe(gulp.dest('./build/img'))
        .pipe(browserSync.stream());
});

gulp.task('minifyJS', function() {
    return gulp.src('./assets/js/*.js') // locations of scss files
    .pipe(sourcemaps.init())
    .pipe(concat('script.min.js'))
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./build/js'))
    .pipe(browserSync.stream());
});

gulp.task('default', gulp.series('images', 'styles', 'minifyJS', 'browser-sync'));