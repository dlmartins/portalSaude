const gulp = require('gulp')
const webserver = require('gulp-webserver')
const watch = require('gulp-watch')

function servidor(cb) {
    return gulp.src('build')
        .pipe(webserver({
            port: 8000,
            open: true,
            livereload: true,
        }))
}

function monitorarArquivos(cb) {
    watch('src/**/*.html', () => gulp.series('appHTML')())
    watch('src/**/*.css', () => gulp.series('appCSS')())
    watch('src/images/**/*.*', () => gulp.series('appIMG')())
    // watch('src/**/*.js', () => gulp.series('appJS')())
    return cb()
}

module.exports = {
    monitorarArquivos,
    servidor
}