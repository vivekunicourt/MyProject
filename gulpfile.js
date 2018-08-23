/*var gulp = require('gulp');
var concat = require('gulp-concat');
var ts=require('gulp-typescript');
var merge = require('merge2'); 

var tsProject = ts.createProject({
    declaration: true
});
gulp.task('convert',function(){
return gulp.src('*.ts')
.pipe(tsProject())
 .pipe(gulp.dest('built/js'));

});
gulp.task('watch', ['scripts'], function() {
    gulp.watch('*.ts', ['scripts']);
});

gulp.task('sample', function(){
  console.log('test');
  return gulp.src('save_data.js').pipe(gulp.dest('build/js'));
  
});

    
gulp.task('default', [ 'sample']);*/
var gulp = require('gulp');
var ts = require('gulp-typescript');
var merge = require('merge2');  // Requires separate installation
 
gulp.task('scripts', function() {
    var tsResult = gulp.src('*.ts')
        .pipe(ts({
            declaration: true
        }));
 
    return merge([
        tsResult.dts.pipe(gulp.dest('release/definitions')),
        tsResult.js.pipe(gulp.dest('release/js'))
    ]);
});
gulp.task('watch', ['scripts'], function() {
    gulp.watch('*.ts', ['scripts']);
});