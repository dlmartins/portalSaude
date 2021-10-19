const gulp = require("gulp");
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");
const sass = require("gulp-sass");
const uglifycss = require("gulp-uglifycss");
const concat = require("gulp-concat");
const htmlmin = require("gulp-htmlmin");
// const imagemin = require("gulp-imagemin");

function appHTML() {
  return gulp
    .src("src/**/*.html")
    .pipe(htmlmin({ collapseWhitespace: true }))
    .pipe(gulp.dest("build"));
}

function appCSS() {
  return gulp
    .src("src/css/style.css")
    .pipe(uglifycss({ uglyComments: true }))
    .pipe(concat("style.min.css"))
    .pipe(gulp.dest("build/css"));
}

function appIMG() {
  return (
    gulp
      .src("src/images/**/*.*")
      // .pipe(imagemin())
      .pipe(gulp.dest("build/images"))
  );
}

// function appJS() {
//   return gulp
//     .src("src/js/**/*.js")
//     .pipe(
//       babel({
//         loader: "babel-loader",
//         comments: false,
//         presets: ["@babel/preset-env"],
//       })
//     )
//     .pipe(uglify())
//     .pipe(concat("app.min.js"))
//     .pipe(gulp.dest("build/js"));
// }

gulp.task("appHTML", appHTML);
gulp.task("appCSS", appCSS);
// gulp.task("appJS", appJS);
gulp.task("appIMG", appIMG);

module.exports = {
  appHTML,
  appCSS,
  appIMG,
  // appJS,
};
