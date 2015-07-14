var gulp = require('gulp'),
    newer = require('gulp-newer'),
    changed = require('gulp-changed'),
    stylus = require('gulp-stylus'),
    autoprefixer = require('gulp-autoprefixer'),
    // csscomb = require('gulp-csscomb'), // for testing 
    jade = require('gulp-jade'),
    htmlmin = require('gulp-htmlmin'),
    imagemin = require('gulp-imagemin'),
    rename = require("gulp-rename"),
    browserSync = require('browser-sync').create();

gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: "test1.ru",
    // reloadDebounce: 100000,
    notify: false
  });
});

gulp.task('stylint', function() {
  gulp.src('src/styl/partials/main.styl')
    .pipe(stylint({
      config: '.stylintrc'
    }))
});

gulp.task('stylus', function() {
  gulp.src('src/styl/style.styl')
    .pipe(stylus({
      compress: true
    }))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    // .pipe(csscomb())
    .pipe(newer('www/css'))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('www/css/'));
});

gulp.task('jade', function() {
  gulp.src('src/jade/*.jade')
    // .pipe(newer('www/'))
    // .pipe(changed('www/', {extension: '.html'}))
    .pipe(jade({
      pretty: false
    }))
    // .pipe(newer('www/'))
    .pipe(htmlmin({
      collapseWhitespace: true
    }))
    // .pipe(newer('www/'))
    .pipe(gulp.dest('www/'));
});

gulp.task('images', function() {
  gulp.src('src/img/*.*')
    .pipe(newer('www/img'))
    .pipe(imagemin({
      // optimizationLevel: 7,
      progressive: true,
      // interlaced: true,
      svgoPlugins: [{
        removeViewBox: false
      }]
    }))
    .pipe(gulp.dest('www/img'));
});

gulp.task('watch', function() {
  gulp.watch('src/styl/**/[^!]*.styl', ['stylus']);
  gulp.watch('src/jade/**/[^!]*.jade', ['jade']);
  gulp.watch('src/jade/**/[^!]*.md', ['jade']);
  gulp.watch('src/images/*.*', ['images']);
  gulp.watch('www/**/*').on('change', browserSync.reload);
});

gulp.task('build', ['stylus', 'jade', 'images']);

gulp.task('default', ['browser-sync', 'watch']);
