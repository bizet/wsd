var gulp = require('gulp'),
    concat = require('gulp-concat'),
    jshint = require('gulp-jshint'),
    path = require('path');

var paths = {
  client_js: 'static/src/js/**/*.js',
  client_css: 'static/src/css/**/*.css',
  dist_js: 'static/dist/js',
  dist_css: 'static/dist/css'
};

gulp.task('js-hint', function() {
  gulp.src(paths.client_js)
    .pipe(jshint({
      predef: ['$', 'angular']
    }))
    .pipe(jshint.reporter('default'))
    .on('error', function(error) {
      console.error(String(error));
    });
});

gulp.task('build-client', function() {
  gulp.src(paths.client_js)
    .pipe(concat('wsd.min.js'))
    .pipe(gulp.dest(paths.dist_js));
  gulp.src(paths.client_css)
    .pipe(concat('wsd.min.css'))
    .pipe(gulp.dest(paths.dist_css));
});

gulp.task('default', ['js-hint', 'build-client']);

