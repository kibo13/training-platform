const mix = require('laravel-mix');

// site
mix .js('resources/js/platform/index.js', 'public/js/platform.js')
    .sass('resources/sass/platform/index.sass', 'public/css/platform.css')
    .version()

// auth
mix .js('resources/js/auth/index.js', 'public/js/auth.js')
    .vue()
    .sass('resources/sass/auth/index.sass', 'public/css/auth.css')
    .version()

// admin
mix .js('resources/js/admin/index.js', 'public/js/admin.js')
    .sass('resources/sass/admin/index.sass', 'public/css/admin.css')
    .version()

// vendors
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/vendors/jquery.min.js')
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/vendors/bootstrap.min.js')
mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/js/vendors/jquery.dataTables.min.js')
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/vendors/bootstrap.min.css')
mix.copy('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/vendors/font-awesome.min.css')

if ( ! mix.inProduction() )
{
    mix.browserSync('training.test')
}
