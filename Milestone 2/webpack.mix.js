let mix = require('laravel-mix');
mix
  .sass('src/app.scss', 'dist/')
  .copy('src/index.php', 'dist/')
  .copy('src/db.php', 'dist/')
  .copy('src/api.php', 'dist/')
  .js('src/app.js', 'dist/');
