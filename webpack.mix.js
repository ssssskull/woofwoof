let mix = require("laravel-mix");

mix.sass("./app/scss/style.scss", "/css");

mix.js("./app/js/script.js", "/js");
mix.setResourceRoot("../");
mix.setPublicPath("public");

if (mix.inProduction()) {
  mix.minify(["public/css/style.css"]).version();
  mix.minify(["public/js/script.js"]).version();
}

mix.webpackConfig({
  stats: {
    children: true,
  },
});
