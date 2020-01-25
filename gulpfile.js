var gulp = require('gulp');
var gulpAutoprefixer = require('gulp-autoprefixer');
var gulpSass = require('gulp-sass');


gulp.task('default', function () {
    console.log('Hello Gulp!')
});
var elixir = require('laravel-elixir');


const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
gulp.task('sass', function () {
    return gulp.src('./styles/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./public/styles'));
});
gulp.task('minify-css', function(){
    gulp.src(['./styles/*.css'])
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(cssmin())
        .pipe(concat('main.css'))
        .pipe(rename("main.min.css"))
        .pipe(gulp.dest('./public/styles'));
});

gulp.task('build', ['sass', 'minify-css']);




elixir(function(mix) {
   mix.webpack('app.js')
});

