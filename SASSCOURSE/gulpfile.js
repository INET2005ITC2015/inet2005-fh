var gulp = require('gulp');
var sass = require('gulp-sass');
gulp.task ('style', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'));
});

//Watch task -- default makes it run with gulp run
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['style']);
});