const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
//const concat = require('gulp-concat');

// Logs Message
gulp.task('message', function(){
  return console.log('Gulp is running...');
});


// Optimize Images
gulp.task('imageMin', () =>
	gulp.src('src/images/*')
		.pipe(imagemin())
		.pipe(gulp.dest('images'))
);

// Minify JS
gulp.task('minify', function(){
  gulp.src('src/js/*.js')
      .pipe(uglify())
      .pipe(gulp.dest('js'));
});


// Compile Sass & Inject Into Browser
gulp.task('sass', function(){
  gulp.src('src/sass/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('src'))
      .pipe(gulp.dest(''))
      .pipe(browserSync.stream());
});


// Watch & Serve
gulp.task('serve', function() {
  browserSync.init({
      server: ""  
  });

  gulp.watch('src/js/*.js', ['minify']);
  gulp.watch('src/images/*', ['imageMin']);
  gulp.watch('src/sass/*.scss', ['sass']);
  gulp.watch("src/*.html").on('change', browserSync.reload);
});

// Default Task
gulp.task('default', ['message', 'sass', 'serve']);
//gulp.task('default', ['message', /*'imageMin'*/, 'sass', /*'minify'*/, 'serve']);