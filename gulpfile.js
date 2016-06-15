var gulp 	= require('gulp'),
	path	= require('path'),
	runSequence = require('run-sequence'),
	less	= require('gulp-less'),
	postcss	= require('gulp-postcss'),
	autoprefixer = require('autoprefixer'),
	cssnano	= require('cssnano'),
	watch 	= require('gulp-watch');

gulp.task('default', function(callback) {
	runSequence(
		['less'],
		['css'],
		callback
	);
});

// Main theme tasks
gulp.task('less', function() {
	return gulp.src('./less/*.less')
		.pipe(less({
			paths: [ path.join(__dirname, 'less', 'plugins') ]
		}))
		.pipe(gulp.dest('./css'));
});

gulp.task('css', function() {
	var processors = [
		autoprefixer({browsers: ['> 5%']}),
		cssnano()
	];
	return gulp.src('./css/*.css')
		.pipe(postcss(processors))
		.pipe(gulp.dest('./css'));
});

gulp.task('build', function(callback){
	runSequence(
		'less',
		'css',
		callback
	);
});

gulp.task('watch', function() {
	gulp.watch('less/**/*.less', ['less', 'css']);
});
