var gulp = require('gulp');
var sass = require('gulp-sass');
var concatCss = require('gulp-concat-css');


gulp.task('sass', function(){
  return gulp.src('style/scss/*.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(concatCss('dashboard.css'))
    .pipe(gulp.dest('style/css/'))
});

gulp.task('watch', function(){
gulp.watch('style/scss/**/*.scss', ['sass']); 
})


