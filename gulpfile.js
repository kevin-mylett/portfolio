var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', function() {
	return gulp.src('sass/style.scss')
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(autoprefixer('> 5%'))
		.pipe(sourcemaps.write('./maps'))
		.pipe(gulp.dest('css'))
		.pipe(browserSync.reload({
			stream: true
		}))
});

gulp.task('watch', ['browserSync', 'sass'], function() {
	gulp.watch('sass/**/*.scss', ['sass']);
	gulp.watch('js/**/*.js', browserSync.reload);
	gulp.watch('*.php', browserSync.reload);
});

gulp.task('browserSync', function() {
	browserSync.init ({
		proxy: "localhost/portfolio"
	})
});