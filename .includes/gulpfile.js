var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var gfi = require("gulp-file-insert");
var docready = require('./js/gulp-helpers/wrapper-docready');
var resize = require('./js/gulp-helpers/wrapper-resize');

// The following are included in Node.js's standard
// library (npm isn't required to get them); but our
// .scss files and this gulpfile will use them.

var fs = require('fs');
var path = require('path');
var glob = require('glob');
var sassGlob = require('gulp-sass-glob');

gulp.task('sass', function() {

// gulp.src locates the source files for the process. 
// This globbing function tells gulp to use all files 
// ending with .scss or .sass within the scss folder. 

	gulp.src('./scss/**/*.{scss,sass}')
		// Initializes sourcemaps
		.pipe(sourcemaps.init())
		// Converts Sass into CSS with Gulp Sass
		.pipe(sassGlob())
		.pipe(sass())
		// Logs compilation errors to console
		.on('error', sass.logError)
		// Runs autoprefixer on CSS where necessary
		.pipe(autoprefixer())
		// Writes sourcemaps into the CSS file
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('stylesheets'))

});

gulp.task('javascript', function() {
	/* combine the document readys */
	gulp.src('./components/**/*.dr.js')
		.pipe(sourcemaps.init())
		.pipe(concat('1_dr.h.js'))
		.pipe(docready())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./js/gulp-helpers/'));
	/* combine the external functions */
	gulp.src('./components/**/*.resize.js')
		.pipe(sourcemaps.init())
		.pipe(concat('2_resize.h.js'))
		.pipe(resize())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./js/gulp-helpers/'));
	/* combine the external functions */
	gulp.src('./components/**/*.function.js')
		.pipe(sourcemaps.init())
		.pipe(concat('3_functions.h.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./js/gulp-helpers/'));
	/* combine the document ready with the external functions*/
	gulp.src('./js/gulp-helpers/*.h.js')
		.pipe(sourcemaps.init())
		.pipe(concat('components.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./js/'));
});

gulp.task('watch', function() {

	// Watches the folders for all specified file extensions
	// If any file changes, run the task listed at the end

	gulp.watch('./scss/**/*.{scss,sass}', ['sass'])
	gulp.watch('./components/**/*.{scss,sass}', ['sass'])
	gulp.watch('./headers/**/*.{scss,sass}', ['sass'])
	gulp.watch('./templates/**/*.{scss,sass}', ['sass'])
	gulp.watch('./components/**/*.dr.js', ['javascript'])
});

// Creating a default task
gulp.task('default', ['sass', 'watch','javascript']);


