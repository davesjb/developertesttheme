const { src, dest, watch, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const cleancss = require("gulp-clean-css");
const concat = require("gulp-concat");
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");
const babel = require("gulp-babel");

const config = {
  stylesPathApp: ["assets/app/styles/**/*.scss", "app/styles/**/*.css"],
  stylesPathDist: "assets/dist/styles",
  scriptsPathApp: "assets/app/scripts/**/*.js",
  scriptsPathDist: "assets/dist/scripts",
};

function generateCSS(cb) {
  src(config.stylesPathApp)
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(autoprefixer())
    .pipe(concat("styles.css"))
    .pipe(cleancss({ compatibility: "ie11" }))
    .pipe(
      rename({
        basename: "styles",
        suffix: ".min",
        extname: ".css",
      })
    )
    .pipe(dest(config.stylesPathDist));
  cb();
}
exports.styles = generateCSS;

function generateJS(cb) {
  src(config.scriptsPathApp)
    .pipe(
      babel({
        presets: [
          [
            "@babel/preset-env",
            {
              targets: { browsers: config.BROWSERS_LIST },
            },
          ],
        ],
      })
    )
    .pipe(uglify())
    .pipe(concat("main.js"))
    .pipe(
      rename({
        basename: "main",
        suffix: ".min",
        extname: ".js",
      })
    )
    .pipe(dest(config.scriptsPathDist));
  cb();
}
exports.scripts = generateJS;

function watchCSS() {
  watch(config.stylesPathApp, generateCSS);
}
exports.watchCSS = watchCSS;

function watchJS() {
  watch(config.scriptsPathApp, generateJS);
}
exports.watchJS = watchJS;

exports.default = parallel(generateCSS, generateJS);
