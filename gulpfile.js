"use strict";

const gulp = require("gulp");
const del = require("del");
const concat = require('gulp-concat');
const minify = require('gulp-minify');
const cleanCss = require('gulp-clean-css');
const sitemapBuilder = require('gulp-sitemap');

// Clean assets
function clean() {
    return del(["./assets/*"]);
}

// Concatenate and minify our javascript files
function scripts() {
    return (
        gulp
            .src([
                "./resources/js/jquery-3.4.1-slim.js",
                "./resources/js/bootstrap-4.4.1.bundle.js",
                "./resources/js/site.js"
            ]) // Set files in order as required.
            .pipe(concat('bundle.js'))
            .pipe(minify())
            .pipe(gulp.dest("./assets/"))
    );
}

// Concatenate and minify CSS task
function css() {
    return gulp
        //.src("./resources/css/**/*")
        .src([
            "./resources/css/bootstrap.css",
            "./resources/css/inter.css",
            //"./resources/css/fa-brands.css",
            //"./resources/css/fa-solid.css",
            "./resources/css/site.css"
        ]) // Set files in order as required.
        .pipe(concat('site.min.css'))
        .pipe(cleanCss())
        .pipe(gulp.dest("./assets/"))
}

function fonts() {
    return gulp
        .src(["./resources/fonts/*"])
        .pipe(gulp.dest('./assets/fonts/'))

}

function sitemap() {
    return gulp
        .src('./!(node_modules){,/**/}*.html', {read: false})
        .pipe(sitemapBuilder({
            siteUrl: 'https://bobbyallen.me'
        }))
        .pipe(gulp.dest('./'))
}

gulp.task('default', gulp.series(clean, css, scripts, fonts, sitemap));
gulp.task('clean', gulp.series(clean));
gulp.task('sitemap', gulp.series(sitemap));
gulp.task('build', gulp.series(clean, css, scripts, fonts, sitemap));
