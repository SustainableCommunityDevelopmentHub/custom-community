// Require
var gulp = require('gulp');  
var less = require('gulp-less');  
var watch = require('gulp-watch');

// Compile Less
gulp.task('compile-less', function() {  
	gulp.src('style.less').pipe(less()).pipe(gulp.dest(''));
});

// Watch Less
gulp.task('watch-less', function() {  
	gulp.watch('*.less' , ['compile-less']);
});

// Run Tasks
gulp.task('default', ['compile-less', 'watch-less']);  