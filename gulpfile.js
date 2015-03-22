
// Load Node Modules/Plugins
var gulp = require('gulp'),
    notify = require( 'gulp-notify' ),			// SENDS NOTIFICATION THROUGH COMMAND LINE. AWESOME!
    plumber = require('gulp-plumber'),			// Prevent pipe breaking caused by errors from gulp plugins	
    watch = require('gulp-watch'),	
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    less = require('gulp-less'),
    minifycss = require('gulp-minify-css'),
    sourcemaps = require('gulp-sourcemaps'),
    minifycss = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    autoprefixer = require('gulp-autoprefixer'),	// Parses CSS files and adds vendor prefixes to CSS rules
    browserSync = require('browser-sync');
	
	

// SERVER TASK

var reload = browserSync.reload;

gulp.task('serve', function() {
  browserSync({
    server: {
      baseDir: 'app'
    }
  });

  gulp.watch(['*.html', 'app/less/*.less', 'app/js/*.js'], {cwd: 'app'}, reload);
  
});


// LESS TASK
gulp.task('less', function() {
	return gulp.src('app/less/project.less')
	.pipe(plumber())
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
	.pipe(minifycss())
	.pipe(rename('styles.min.css'))
	.pipe(gulp.dest('dist/css/'))
	.pipe(watch('app/less/*.less'))
	.pipe(notify({ message: 'Less task complete' }));	
});


// SCRIPTS TASK
gulp.task('scripts', function() {
	return gulp.src('app/js/main.js')
	.pipe(plumber())
	.pipe(jshint())
	.pipe(jshint.reporter('default'))
	.pipe(uglify())
	.pipe(rename('main.min.js'))
	.pipe(gulp.dest('dist/js/'))
	.pipe(watch('app/js/*.js'))
	.pipe( notify({ message: 'scripts task complete' }) );
});


// IMAGES TASK
gulp.task('images', function() {
	return gulp.src('app/images/*')
	.pipe(plumber())
	.pipe(imagemin())
	.pipe(gulp.dest('dist/images/'))
	.pipe(watch('app/img/*', 'images'))
	.pipe(notify({ message: 'Images task complete' }));
});


// DEFAULT TASK
gulp.task('default', ['less', 'scripts', 'images', 'serve'], function() {});
