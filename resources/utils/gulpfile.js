'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./scss/main.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('../../public/dist/'))
});

gulp.task('sass:watch' , function () {
    gulp.watch(
        './scss/**/*.scss', { }, gulp.series('sass')
    );
});
