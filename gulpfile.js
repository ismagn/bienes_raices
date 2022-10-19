const {src, dest, watch, parallel} = require("gulp");
const sass = require("gulp-sass")(require("sass"));


function css(done){
    src("src/scss/**/*.scss")
    .pipe(sass())
    .pipe(dest("build/css"))

    done();
}

function javascript(done){
    src("src/js/**/*.js")
    .pipe(dest("build/js"));

    done();
}

function imagenes(done) {
    src("src/img/**/*")
    .pipe(dest('build/img'))

    done();
        
}


function dev(done) {
    watch("src/scss/**/*.scss",css);
    watch("src/js/**/*.js",javascript);
    watch("src/img/**/*",imagenes);

    done();
}

exports.css=css;
exports.js=javascript;
exports.dev= parallel(dev);