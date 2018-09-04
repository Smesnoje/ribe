
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function(){
    return gulp.src('sass/style.scss')
      .pipe(sass()) // Converts Sass to CSS with gulp-sass
      .pipe(gulp.dest(''))
      .pipe(browserSync.reload({
        stream: true
    }))
});

gulp.task('watch', ['browserSync', 'sass'], function (){
  gulp.watch('sass/**/*.scss', ['sass']); 
  // Other watchers
});

gulp.task('browserSync', function() {
  browserSync.init({
      proxy: "http://localhost/ribe/",
      port: 8080
  })
})