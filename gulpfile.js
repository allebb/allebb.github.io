var gulp = require('gulp');
var concat = require('gulp-concat');
var minify = require('gulp-minify');
var cleanCss = require('gulp-clean-css');

// Concatenate and minify the JS files.
gulp.task('pack-js', function () {
    return gulp.src(['assets/js/jquery.js', 'assets/js/bootstrap.js', 'assets/js/site.js'])
            .pipe(concat('bundle.js'))
            .pipe(minify())
            .pipe(gulp.dest('assets/build/js'));
});

// Concatenate and minify the CSS files.
gulp.task('pack-css', function () {
    return gulp.src(['assets/css/bootstrap.css', 'assets/css/site.css'])
            .pipe(concat('site.min.css'))
            .pipe(cleanCss())
            .pipe(gulp.dest('assets/build/css'));
});

// Copy the 'fonts' to the build directory.
gulp.task('fonts', function () {
    return gulp.src([
        'assets/fonts/*'])
            .pipe(gulp.dest('assets/build/fonts'));
});


// Handles the 'gulp build' comamnd.
gulp.task('build', ['pack-js', 'pack-css', 'fonts']);

// Handles the default 'gulp' command.
gulp.task('default', [], function () {
    gulp.start('build');
});