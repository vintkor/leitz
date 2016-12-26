var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    browserSync = require('browser-sync'),
    concat      = require('gulp-concat'),
    uglify      = require('gulp-uglify'),
    cssnano     = require('gulp-cssnano'),
    rename      = require('gulp-rename'),
    del         = require('del'),
    imagemin    = require('gulp-imagemin'),
    pngquant    = require('imagemin-pngquant'),
    cache       = require('gulp-cache'),
    autoprefixer= require('gulp-autoprefixer'),
    htmlreplace = require('gulp-html-replace'),
    htmlmin     = require('gulp-htmlmin');

gulp.task('sass', function(){
    return gulp.src('app/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: false }))
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: 'app'
        },
        notify: false
    });
});

gulp.task('scripts', function() {
    return gulp.src([
        // 'app/libs/modernizr.js',
        // 'app/libs/jquery/dist/jquery.min.js',
        // 'app/libs/bootstrap/dist/js/bootstrap.js',
        // 'app/libs/sweetalert/dist/sweetalert.min.js',
        // 'app/libs/wow.js',
        // 'app/libs/jquery.maskedinput/dist/jquery.maskedinput.js',
        // 'app/libs/headroom.js/dist/headroom.js',
        // 'app/libs/jquery-scrollto.js',
        // 'app/libs/jquery.scrollTo/jquery.scrollTo.js',
        // 'app/libs/owl.carousel/owl.carousel.js',
        // 'app/libs/stickUp.js'
        // 'app/libs/vue/dist/vue.min.js',
        ])
        .pipe(concat('libs.min.js'))
        // .pipe(uglify())
        .pipe(gulp.dest('app/js'));
});

gulp.task('css-libs', ['sass'], function() {
    return gulp.src('app/css/libs.css')
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('app/css'));
});

gulp.task('watch', ['browser-sync', 'css-libs', 'scripts'], function() {
    gulp.watch('app/sass/**/*.scss', ['sass']);
    gulp.watch('app/*.html', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
});

// ----------------------Очистка кеша gulp clear ----------------------------

gulp.task('clear', function () {
    return cache.clearAll();
})

// ----------------------Дефолтный таск gulp --------------------------------

gulp.task('default', ['watch']);

// ----------------------Сборка проекта "gulp build"---------------------------

gulp.task('clean', function() {
    return del.sync('dist');
});

gulp.task('scripts-min', function() {
    return gulp.src([
        'app/js/main.js'
        ])
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dist/js'));
});

gulp.task('img', function() {
    return gulp.src('app/img/**/*')
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('dist/img'));
});

gulp.task('default', ['watch']);

gulp.task('build', ['clean', 'img', 'sass', 'scripts-min'], function() {

    var buildCss = gulp.src([
        'app/css/libs.min.css'
        ])
    .pipe(gulp.dest('dist/css'))

    var minCss = gulp.src('app/css/main.css')
    .pipe(cssnano())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('dist/css'))


    var buildFonts = gulp.src('app/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'))

    var buildJs = gulp.src('app/js/**/*')
    .pipe(gulp.dest('dist/js'))

    var buildHtml = gulp.src('app/*.html')
    .pipe(htmlreplace({
            'css': 'css/libs.min.css',
            'css2': 'css/main.min.css',
            'js': 'js/main.min.js'
        }))
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('dist'));

    var buildPhp = gulp.src('app/*.php')
    .pipe(gulp.dest('dist'));

    var buildPng = gulp.src('app/*.png')
    .pipe(gulp.dest('dist'));

    var buildIco = gulp.src('app/*.ico')
    .pipe(gulp.dest('dist'));

     var buildJson = gulp.src('app/*.json')
    .pipe(gulp.dest('dist'));

    var buildXml = gulp.src('app/*.xml')
    .pipe(gulp.dest('dist'));
});