var gulp = require('gulp');
var concat = require('gulp-concat');
var minify = require('gulp-minify');
var cleanCss = require('gulp-clean-css');

// Concatenate and minify the JS files.
gulp.task('pack-js', function () {
    return gulp.src(['assets/js/jquery-3.1.1.js', 'resources/js/bootstrap.js', 'resources/js/site.js'])
            .pipe(concat('app.js')) // Concatenate to a file named 'app.js'
            .pipe(minify())
            .pipe(gulp.dest('assets')); // Output the 'app.js' to our /assets directory!
});

// Concatenate and minify the CSS files.
gulp.task('pack-css', function () {
    return gulp.src(['assets/css/bootstrap.css', 'assets/css/font-awesome.css', 'assets/css/font-imports.css', 'assets/css/site.css'])
            .pipe(concat('site.min.css')) // Concatenate to a file named 'site.min.css'
            .pipe(cleanCss())
            .pipe(gulp.dest('assets')); // Output the 'site.min.css' to our /assets directory!
});

// Copy the 'fonts' to the build directory.
//gulp.task('fonts', function () {
//    return gulp.src([
//        'assets/fonts/*'])
//            .pipe(gulp.dest('assets/build/fonts'));
//});

// Handles the 'gulp build' command.
gulp.task('build', ['pack-js', 'pack-css', 'fonts']);

// Handles the default 'gulp' command.
gulp.task('default', [], function () {
    gulp.start('build');
});